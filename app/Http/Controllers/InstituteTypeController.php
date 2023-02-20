<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InstituteType;
use Validator;

class InstituteTypeController extends Controller
{
    public function index(){
        if(dsld_have_user_permission('institute-type') == 0){
            return redirect()->route('backend.admin')->with('error', 'You have no permission');
        }
        $page['title'] = 'Institute Type List';
        $page['name'] = 'Institute Type';
        return view('backend.modules.institutes.types.show', compact('page'));
    }


    public function get_ajax_institute_types(Request $request){
        if($request->page != 1){$start = $request->page * 25;}else{$start = 0;}
        $search = $request->search;
        $sort = $request->sort;

        $data = InstituteType::where('title','!=', '');

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
        return view('backend.modules.institutes.types.ajax_types', compact('data'));
    }


    public function store(Request $request){
        if(dsld_have_user_permission('institute-type_add') == 0){
            return response()->json(['status' => 'error', 'message'=> "You have no permission."]);
        }
        $slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->title));


        $validator = Validator::make($request->all(), [
            'title' => 'required|max:50',
            'user_id' => 'required|integer',
            'status' => 'required|integer'
        ]);


        if($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => $validator->errors()->all()]);
        }

        $institute = new InstituteType;
        $institute->title = $request->title;
        $institute->user_id =  $request->user_id;
        $institute->order = $request->order;
        $institute->level = 0;
        $institute->parents_id = 0;
        $institute->status = $request->status;
        
        if($institute->save()){
            return response()->json(['status' => 'success', 'message'=> 'Data insert success.']);
        }else{
            return response()->json(['status' => 'error', 'message'=> 'Data insert failed.']);
        }
        
    }

    public function edit(Request $request){
        if(dsld_have_user_permission('institute-type_edit') == 0){
            return redirect()->route('backend.admin')->with('error', 'You have no permission');
        }

        $data = InstituteType::where('id', $request->id)->where('user_id', $request->user_id)->first();
        return view('backend.modules.institutes.types.edit', compact('data'));
    }


    public function update(Request $request){
        if(dsld_have_user_permission('institute-type_edit') == 0){
            return response()->json(['status' => 'error', 'message'=> "You have no permission."]);
        }
        

        $validator = Validator::make($request->all(), [
            'title' => 'required|max:50',
            'user_id' => 'required|integer',
            'status' => 'required|integer'
        ]);


        if($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => $validator->errors()->all()]);
        }
             
        $institute =  InstituteType::findOrFail($request->id);
        $institute->title = $request->title;
        $institute->user_id =  $request->user_id;
        $institute->order = $request->order;
        $institute->level = 0;
        $institute->parents_id = 0;
        $institute->status = $request->status;
        
        if($institute->save()){
            return response()->json(['status' => 'success', 'message'=> 'Data update success.']);
        }else{
            return response()->json(['status' => 'error', 'message'=> 'Data update failed.']);
        }
        
    }


    public function destory(Request $request){
        if(dsld_have_user_permission('institute-type_delete') == 0){
            return response()->json(['status' => 'error', 'message'=> "You have no permission."]);
        }
        $type = InstituteType::findOrFail($request->id);
        if($type != ''){
            if($type->delete()){
                return response()->json(['status' => 'success', 'message' => 'Data deleted successully.']);
            }else{
                return response()->json(['status' => 'error', 'message' => 'Data deleted failed.']);
            }
        }else{
            return response()->json(['status' => 'warning', 'message' => 'Data Not found.']);
        }
       
    }


    public function status(Request $request){
        if(dsld_have_user_permission('institute-type_edit') == 0){
            return response()->json(['status' => 'error', 'message'=> "You have no permission."]);
        }
        
        $type = InstituteType::findOrFail($request->id);
        if($type != ''){
            if($type->status != $request->status){
                $type->status = $request->status;
                $type->save();
                return response()->json(['status' => 'success', 'message' => 'Status update successully.']);
            }else{
                return response()->json(['status' => 'error', 'message' => 'Status update failed.']);
            }
        }else{
            return response()->json(['status' => 'warning', 'message' => 'Data Not found.']);
        }
       
    }

}
