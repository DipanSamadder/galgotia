<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassRoom;
use Validator;

class ClassRoomController extends Controller
{
    public function index(){
        if(dsld_have_user_permission('class-room') == 0){
            return redirect()->route('backend.admin')->with('error', 'You have no permission');
        }
        $page['title'] = 'Class List';
        $page['name'] = 'Class';
        return view('backend.modules.institutes.classes.show', compact('page'));
    }


    public function get_ajax_classes(Request $request){
        if($request->page != 1){$start = $request->page * 25;}else{$start = 0;}
        $search = $request->search;
        $sort = $request->sort;

        $data = ClassRoom::where('title','!=', '');

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
        return view('backend.modules.institutes.classes.ajax_classes', compact('data'));
    }

    public function store(Request $request){
        if(dsld_have_user_permission('class-room_add') == 0){
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

        $class = new ClassRoom;
        $class->title = $request->title;
        $class->floors_id =  empty($request->floors_id) ? 0 : $request->floors_id;
        $class->blocks_id =  empty($request->blocks_id) ? 0 : $request->blocks_id;
        $class->institutes_id =  $request->institutes_id;
        $class->user_id =  $request->user_id;
        $class->order = $request->order;;
        $class->status = $request->status;
        
        if($class->save()){
            return response()->json(['status' => 'success', 'message'=> 'Data insert success.']);
        }else{
            return response()->json(['status' => 'error', 'message'=> 'Data insert failed.']);
        }
        
    }

    public function edit(Request $request){
        if(dsld_have_user_permission('class-room_edit') == 0){
            return redirect()->route('backend.admin')->with('error', 'You have no permission');
        }

        $data = ClassRoom::where('id', $request->id)->where('user_id', $request->user_id)->first();
        return view('backend.modules.institutes.classes.edit', compact('data'));
    }


    public function update(Request $request){
        if(dsld_have_user_permission('class-room_edit') == 0){
            return response()->json(['status' => 'error', 'message'=> "You have no permission."]);
        }
        

        $validator = Validator::make($request->all(), [
            'title' => 'required|max:50',
            'status' => 'required|integer'
        ]);


        if($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => $validator->errors()->all()]);
        }
             
        $class =  ClassRoom::findOrFail($request->id);
        $class->title = $request->title;
        $class->floors_id =  empty($request->floors_id) ? 0 : $request->floors_id;
        $class->blocks_id =  empty($request->blocks_id) ? 0 : $request->blocks_id;
        $class->institutes_id = $request->institutes_id;
        $class->order = $request->order;
        $class->status = $request->status;
        
        if($class->save()){
            return response()->json(['status' => 'success', 'message'=> 'Data update success.']);
        }else{
            return response()->json(['status' => 'error', 'message'=> 'Data update failed.']);
        }
        
    }


    public function destory(Request $request){
        if(dsld_have_user_permission('class-room_delete') == 0){
            return response()->json(['status' => 'error', 'message'=> "You have no permission."]);
        }
        $class = ClassRoom::findOrFail($request->id);
        if($class != ''){
            if($class->delete()){
                return response()->json(['status' => 'success', 'message' => 'Data deleted successully.']);
            }else{
                return response()->json(['status' => 'error', 'message' => 'Data deleted failed.']);
            }
        }else{
            return response()->json(['status' => 'warning', 'message' => 'Data Not found.']);
        }
       
    }


    public function status(Request $request){
        if(dsld_have_user_permission('class-room_edit') == 0){
            return response()->json(['status' => 'error', 'message'=> "You have no permission."]);
        }
        
        $class = ClassRoom::findOrFail($request->id);
        if($class != ''){
            if($class->status != $request->status){
                $class->status = $request->status;
                $class->save();
                return response()->json(['status' => 'success', 'message' => 'Status update successully.']);
            }else{
                return response()->json(['status' => 'error', 'message' => 'Status update failed.']);
            }
        }else{
            return response()->json(['status' => 'warning', 'message' => 'Data Not found.']);
        }
       
    }
}
