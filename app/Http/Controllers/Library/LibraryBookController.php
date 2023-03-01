<?php

namespace App\Http\Controllers\Library;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LibraryBook;
use Validator;

class LibraryBookController extends Controller
{
    
    public function index(){
        if(dsld_have_user_permission('library-book') == 0){
            return redirect()->route('backend.admin')->with('error', 'You have no permission');
        }
        $page['title'] = 'Book List';
        $page['name'] = 'Book';
        return view('backend.modules.libraries.books.show', compact('page'));
    }
    
    public function get_ajax_library_books(Request $request){
        if($request->page != 1){$start = $request->page * 25;}else{$start = 0;}
        $search = $request->search;
        $sort = $request->sort;
    
        $data = LibraryBook::where('title','!=', '');
    
        if($search != ''){
            $data->where('title', 'like', '%'.$search.'%');
        }
       
        if($sort != ''){
            switch ($request->sort) {
                case 'newest':
                    $data->orderBy('created_at', 'desc');
                    break;
                case 'oldest':
                    $data->orderBy('created_at', 'asc');
                    break;
                case 'active':
                    $data->where('status', 1);
                    break;
                case 'deactive':
                    $data->where('status', 0);
                    break;
                default:
                    $data->orderBy('created_at', 'desc');
                    break;
            }
        }
        $data = $data->skip($start)->paginate(25);
        return view('backend.modules.libraries.books.ajax_files', compact('data'));
    }
    
    public function store(Request $request){
        if(dsld_have_user_permission('library-book_add') == 0){
            return response()->json(['status' => 'error', 'message'=> "You have no permission."]);
        }
    
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:50|unique:library_books',
            'code' => 'required|max:20|unique:library_books',
            'stock' => 'required|max:50',
            'library_categories_id' => 'required|integer',
            'library_publishers_id' => 'required|integer',
            'library_authors_id' => 'required|integer',
            'library_setups_id' => 'required|integer',
            'created_by' => 'required|integer',
            'status' => 'required|integer'
        ]);
    
    
        if($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => $validator->errors()->all()]);
        }
    
        $action = new LibraryBook;
        $action->title = $request->title;
        $action->library_categories_id =  $request->library_categories_id;
        $action->code =  $request->code;
        $action->stock =  $request->stock;
        $action->library_authors_id =  $request->library_authors_id;
        $action->library_publishers_id =  $request->library_publishers_id;
        $action->library_setups_id =  $request->library_setups_id;
        $action->created_by = $request->created_by;
        $action->order = $request->order;
        $action->status = $request->status;
        
        if($action->save()){
            return response()->json(['status' => 'success', 'message'=> 'Data insert success.']);
        }else{
            return response()->json(['status' => 'error', 'message'=> 'Data insert failed.']);
        }
        
    }
    
    public function edit(Request $request){
        if(dsld_have_user_permission('library-book_edit') == 0){
            return redirect()->route('backend.admin')->with('error', 'You have no permission');
        }
    
        $data = LibraryBook::where('id', $request->id)->first();
        return view('backend.modules.libraries.books.edit', compact('data'));
    }
    
    
    public function update(Request $request){
        if(dsld_have_user_permission('library-book_edit') == 0){
            return response()->json(['status' => 'error', 'message'=> "You have no permission."]);
        }
        
    
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:50',
            'stock' => 'required|max:50',
            'library_categories_id' => 'required|integer',
            'library_publishers_id' => 'required|integer',
            'library_authors_id' => 'required|integer',
            'status' => 'required|integer'
        ]);
    
    
        if($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => $validator->errors()->all()]);
        }
      
        $action =  LibraryBook::findOrFail($request->id);
        $action->title = $request->title;
        $action->library_categories_id =  $request->library_categories_id;
        $action->stock =  $request->stock;
        $action->library_authors_id =  $request->library_authors_id;
        $action->library_publishers_id =  $request->library_publishers_id;
        $action->created_by = $request->created_by;
        $action->order = $request->order;
        $action->status = $request->status;

        if($action->save()){
            return response()->json(['status' => 'success', 'message'=> 'Data update success.']);
        }else{
            return response()->json(['status' => 'error', 'message'=> 'Data update failed.']);
        }

        
        
        
    }
    
    
    public function destory(Request $request){
        if(dsld_have_user_permission('library-book_delete') == 0){
            return response()->json(['status' => 'error', 'message'=> "You have no permission."]);
        }
        $action = LibraryBook::findOrFail($request->id);
        if($action != ''){
            if($action->delete()){
                return response()->json(['status' => 'success', 'message' => 'Data deleted successully.']);
            }else{
                return response()->json(['status' => 'error', 'message' => 'Data deleted failed.']);
            }
        }else{
            return response()->json(['status' => 'warning', 'message' => 'Data Not found.']);
        }
       
    }
    
    
    public function status(Request $request){
        if(dsld_have_user_permission('library-book_edit') == 0){
            return response()->json(['status' => 'error', 'message'=> "You have no permission."]);
        }
        
        $action = LibraryBook::findOrFail($request->id);
        if($action != ''){
            if($action->status != $request->status){
                $action->status = $request->status;
                $action->save();
                return response()->json(['status' => 'success', 'message' => 'Status update successully.']);
            }else{
                return response()->json(['status' => 'error', 'message' => 'Status update failed.']);
            }
        }else{
            return response()->json(['status' => 'warning', 'message' => 'Data Not found.']);
        }
       
    }
}