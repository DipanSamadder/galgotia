<?php

namespace App\Http\Controllers\Library;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LibraryBook;
use App\Models\LibraryBookIssue;
use App\Models\User;
use Validator;


class LibraryBookIssueController extends Controller
{
   
    public function index(){
        if(dsld_have_user_permission('library-category') == 0){
            return redirect()->route('backend.admin')->with('error', 'You have no permission');
        }
        $page['title'] = 'Book Issue List';
        $page['name'] = 'Book Issue';
        return view('backend.modules.libraries.issues.show', compact('page'));
    }


    public function get_ajax_library_issues(Request $request){
        
        if($request->page != 1){$start = $request->page * 25;}else{$start = 0;}
        $search = $request->search;
        $sort = $request->sort;
        $type = $request->type;

        $data = LibraryBookIssue::where('created_at', '!=', '');

        if($search != ''){
            $book = LibraryBook::where('title', 'like', '%'.$search.'%')->first();
            if($book != ''){
                $data->where('library_books_id', $book->id);
            }else{
                $user = User::where('name', 'like', '%'.$search.'%')->first();
                $data->where('user_id', $user->id);
            }
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

        if($type != 'all' || $type != ''){
            switch ($request->type) {
                case 'faculty':
                    $data->where('is_faculty', 1);
                    break;
                case 'student':
                    $data->where('is_faculty', 0);
                    break;
                default:
                    break;
            }
        }
        $data = $data->skip($start)->paginate(25);
        return view('backend.modules.libraries.issues.ajax_files', compact('data'));

    }

    public function store(Request $request){
        if(dsld_have_user_permission('library-category_add') == 0){
            return response()->json(['status' => 'error', 'message'=> "You have no permission."]);
        }

        $validator = Validator::make($request->all(), [
            'user_id' => 'required|max:50',
            'library_books_id' => 'required|integer',
            'created_by' => 'required|integer',
        ]);


        if($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => $validator->errors()->all()]);
        }
        
        $user = user::where('id', $request->user_id)->first();

        $setup = LibrarySetup::where('user_id', $request->user_id)->where('status', 1)->count();

        $over_used = LibraryBookIssue::where('user_id', $request->user_id)->where('status', 1)->count();

        $already_issues = LibraryBookIssue::where('user_id', $request->user_id)->where('library_books_id', $request->library_books_id)->where('status', 1)->first();


        $already_issues = LibraryBookIssue::where('user_id', $request->user_id)->where('library_books_id', $request->library_books_id)->where('status', 1)->first();
        

        

        if($already_issues == '' && $over_used < 3){

            $timestamp = time()-86400;
            $date = strtotime("+7 day", $timestamp);

            $is_issued = LibraryBook::where('id', $request->library_books_id)->first();

            if($is_issued->stock > $is_issued->issued){
                $action = new LibraryBookIssue;
                $action->user_id = $request->user_id;
                $action->created_by =  $request->created_by;
                $action->issue = date('Y-m-d h:i:s');
                $action->return = date('Y-m-d h:i:s', $date);
                $action->is_faculty = $user->user_type == 'students' ? 0 : 1;
                $action->library_books_id = $request->library_books_id;
                $action->status = 1;

                $issued = LibraryBook::findOrFail($request->library_books_id);
                $issued->issued = $is_issued->issued+1 ;
                $issued->save(); 

                if($action->save()){
                    return response()->json(['status' => 'success', 'message'=> 'Data insert success.']);
                }else{
                    return response()->json(['status' => 'error', 'message'=> 'Data insert failed.']);
                }
            }else{
                return response()->json(['status' => 'warning', 'message'=> 'Book is not available.']);
            }
        }else{
            return response()->json(['status' => 'warning', 'message'=> 'You already Issued max or this book.']);
        }
       
        
        
    }

    public function edit(Request $request){
        if(dsld_have_user_permission('library-category_edit') == 0){
            return redirect()->route('backend.admin')->with('error', 'You have no permission');
        }

        $data = LibraryBookIssue::where('id', $request->id)->first();
        return view('backend.modules.libraries.issues.edit', compact('data'));
    }


    public function update(Request $request){
        if(dsld_have_user_permission('library-category_edit') == 0){
            return response()->json(['status' => 'error', 'message'=> "You have no permission."]);
        }
        

        $validator = Validator::make($request->all(), [
            'status' => 'required|integer'
        ]);


        if($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => $validator->errors()->all()]);
        }

        $book_issue = LibraryBookIssue::where('id', $request->id)->first();
        $is_issued = LibraryBook::where('id', $book_issue->library_books_id)->first();

        
        $action =  LibraryBookIssue::findOrFail($request->id);
        $action->status = $request->status;

        if($action->save()){

            $issued = LibraryBook::findOrFail($book_issue->library_books_id);
            if($is_issued->issued == 0){
                $issued->issued = 0 ;
            }else{
                $issued->issued = $is_issued->issued-1 ;
            }
            
            $issued->save(); 

            return response()->json(['status' => 'success', 'message'=> 'Data update success.']);
        }else{
            return response()->json(['status' => 'error', 'message'=> 'Data update failed.']);
        }
        
    }


    public function destory(Request $request){
        if(dsld_have_user_permission('library-category_delete') == 0){
            return response()->json(['status' => 'error', 'message'=> "You have no permission."]);
        }
        $action = LibraryBookIssue::findOrFail($request->id);
        if($action != ''){
            $book_issue = LibraryBookIssue::where('id', $request->id)->first();
            $is_issued = LibraryBook::where('id', $book_issue->library_books_id)->first();
                
            if($action->delete()){
                $issued = LibraryBook::findOrFail($book_issue->library_books_id);
                if($is_issued->issued == 0){
                    $issued->issued = 0 ;
                }else{
                    $issued->issued = $is_issued->issued-1 ;
                }
                $issued->save(); 
                


                return response()->json(['status' => 'success', 'message' => 'Data deleted successully.']);
            }else{
                return response()->json(['status' => 'error', 'message' => 'Data deleted failed.']);
            }
        }else{
            return response()->json(['status' => 'warning', 'message' => 'Data Not found.']);
        }
       
    }

}
