<?php

namespace App\Http\Controllers\Library;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\LibrarySetup;
use App\Models\LibrarySetupFine;
use Validator;

class LibrarySetupController extends Controller
{
    
    public function index(){
        if(dsld_have_user_permission('library-setup') == 0){
            return redirect()->route('backend.admin')->with('error', 'You have no permission');
        }
        $page['title'] = 'Library Setup List';
        $page['name'] = 'Library Setup';
        return view('backend.modules.libraries.setups.show', compact('page'));
    }


    public function get_ajax_library_setups(Request $request){
        if($request->page != 1){$start = $request->page * 25;}else{$start = 0;}
        $search = $request->search;
        $sort = $request->sort;

        $data = LibrarySetup::where('title','!=', '');

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
        return view('backend.modules.libraries.setups.ajax_files', compact('data'));
    }

    public function store(Request $request){
        if(dsld_have_user_permission('library-setup_add') == 0){
            return response()->json(['status' => 'error', 'message'=> "You have no permission."]);
        }

        $validator = Validator::make($request->all(), [
            'title' => 'required|max:50|unique:library_setups',
            'institutes_id' => 'required|integer',
            'return_days' => 'required|integer',
            'fine' => 'required|integer',
            'created_by' => 'required|integer',
            'status' => 'required|integer'
        ]);


        if($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => $validator->errors()->all()]);
        }

        $action = new LibrarySetup;
        $action->title = $request->title;
        $action->message = $request->message;
        $action->about = $request->about;
        $action->open_close = $request->open_close;
        $action->lunch_time = $request->lunch_time;
        $action->holiday = $request->holiday;
        $action->logo = $request->logo;
        $action->institutes_id = $request->institutes_id;
        $action->created_by =  $request->created_by;
        $action->status = $request->status;
        
        if($action->save()){
            $fine = new LibrarySetupFine;
            $fine->programs_id = 0;
            $fine->return_days = $request->return_days;
            $fine->fine = $request->fine;
            $fine->library_setups_id = $action->id;
            $fine->created_by =  $request->created_by;
            $fine->status = $request->status;
            $fine->save();    

            return response()->json(['status' => 'success', 'message'=> 'Data insert success.']);
        }else{
            return response()->json(['status' => 'error', 'message'=> 'Data insert failed.']);
        }
        
    }

    public function edit(Request $request){
        if(dsld_have_user_permission('library-setup_edit') == 0){
            return redirect()->route('backend.admin')->with('error', 'You have no permission');
        }

        $data = LibrarySetup::where('id', $request->id)->first();
        return view('backend.modules.libraries.setups.edit', compact('data'));
    }
    
    public function fine_edit(Request $request){
        if(dsld_have_user_permission('library-setup_edit') == 0){
            return redirect()->route('backend.admin')->with('error', 'You have no permission');
        }

        $data = LibrarySetupFine::where('library_setups_id', $request->id)->first();
        return view('backend.modules.libraries.setups.edit_fine', compact('data'));
    }


    public function update(Request $request){
        if(dsld_have_user_permission('library-setup_edit') == 0){
            return response()->json(['status' => 'error', 'message'=> "You have no permission."]);
        }
        

        $validator = Validator::make($request->all(), [
            'title' => 'required|max:50',
            'status' => 'required|integer'
        ]);


        if($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => $validator->errors()->all()]);
        }
             
        $action =  LibrarySetup::findOrFail($request->id);
        $action->title = $request->title;
        $action->message = $request->message;
        $action->about = $request->about;
        $action->open_close = $request->open_close;
        $action->lunch_time = $request->lunch_time;
        $action->holiday = $request->holiday;
        $action->logo = $request->logo;
        $action->status = $request->status;
        
        if($action->save()){
            return response()->json(['status' => 'success', 'message'=> 'Data update success.']);
        }else{
            return response()->json(['status' => 'error', 'message'=> 'Data update failed.']);
        }
        
    }

    public function fine_update(Request $request){
        if(dsld_have_user_permission('library-setup_edit') == 0){
            return response()->json(['status' => 'error', 'message'=> "You have no permission."]);
        }
        

        $validator = Validator::make($request->all(), [
            'return_days' => 'required|integer',
            'fine' => 'required|integer'
        ]);


        if($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => $validator->errors()->all()]);
        }
             
        $action =  LibrarySetupFine::findOrFail($request->id);
        $action->return_days = $request->return_days;
        $action->fine = $request->fine;
        
        if($action->save()){
            return response()->json(['status' => 'success', 'message'=> 'Data update success.']);
        }else{
            return response()->json(['status' => 'error', 'message'=> 'Data update failed.']);
        }
        
    }


    public function destory(Request $request){
        if(dsld_have_user_permission('library-setup_delete') == 0){
            return response()->json(['status' => 'error', 'message'=> "You have no permission."]);
        }
        $action = LibrarySetup::findOrFail($request->id);
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
        if(dsld_have_user_permission('library-setup_edit') == 0){
            return response()->json(['status' => 'error', 'message'=> "You have no permission."]);
        }
        
        $action = LibrarySetup::findOrFail($request->id);
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