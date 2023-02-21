<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faculty;
use App\Models\User;
use Validator;

class FacultyController extends Controller
{
    public function index(){
        if(dsld_have_user_permission('program-semester') == 0){
            return redirect()->route('backend.admin')->with('error', 'You have no permission');
        }
        $page['title'] = 'Faculty List';
        $page['name'] = 'Faculty';
        return view('backend.modules.faculties.show', compact('page'));
    }


    public function get_ajax_faculty(Request $request){
        if($request->page != 1){$start = $request->page * 25;}else{$start = 0;}
        $search = $request->search;
        $sort = $request->sort;

        $data = Faculty::where('status', 1);

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
        return view('backend.modules.faculties.ajax_files', compact('data'));
    }

    public function store(Request $request){
        if(dsld_have_user_permission('program-semester_add') == 0){
            return response()->json(['status' => 'error', 'message'=> "You have no permission."]);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:50',
            'email' => 'required|email|max:255',
            'password' => 'required|max:50',
            'phone' => 'required|integer',
            'created_by' => 'required|integer',
            'status' => 'required|integer'
        ]);


        if($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => $validator->errors()->all()]);
        }

        $social_link = array();
        foreach($request->socials as $key => $value){
            array_push($social_link, array($value => $request[$value]));
        }

        if(User::where('email', $request->email)->first() == null){
            $user =  new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password =  Hash::make($request->password);
            $user->phone =  $request->phone;
            $user->user_type = 'staff';
            $user->avatar_original = $request->avatar_original;
            $user->banned = 0;
            $user->save();

            $action = new Faculty;
            $action->about = $request->about;
            $action->user_id =  $user->id;
            $action->social_link =  $social_link;
            $action->departments_id =  $user->departments_id;
            $action->institutes_id =  $user->institutes_id;
            $action->created_by =  $request->created_by;
            $action->order = $request->order;;
            $action->status = $request->status;
            $action->save();

            if($action->save()){
                return response()->json(['status' => 'success', 'message'=> 'Data insert success.']);
            }else{
                return response()->json(['status' => 'error', 'message'=> 'Data insert failed.']);
            }
        }else{
            return response()->json(['status' => 'warning', 'message'=> 'Details already exist! please try agin.']);
        }        
    }

    public function edit(Request $request){
        if(dsld_have_user_permission('program-semester_edit') == 0){
            return redirect()->route('backend.admin')->with('error', 'You have no permission');
        }

        $data = Faculty::where('id', $request->id)->where('created_by', $request->created_by)->first();
        return view('backend.modules.faculties.edit', compact('data'));
    }


    public function update(Request $request){
        if(dsld_have_user_permission('program-semester_edit') == 0){
            return response()->json(['status' => 'error', 'message'=> "You have no permission."]);
        }
        

        $validator = Validator::make($request->all(), [
            'title' => 'required|max:50',
            'status' => 'required|integer'
        ]);


        if($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => $validator->errors()->all()]);
        }
             
        $action =  Faculty::findOrFail($request->id);
        $action->title = $request->title;
        $action->order = $request->order;
        $action->status = $request->status;
        
        if($action->save()){
            return response()->json(['status' => 'success', 'message'=> 'Data update success.']);
        }else{
            return response()->json(['status' => 'error', 'message'=> 'Data update failed.']);
        }
        
    }


    public function destory(Request $request){
        if(dsld_have_user_permission('program-semester_delete') == 0){
            return response()->json(['status' => 'error', 'message'=> "You have no permission."]);
        }
        $action = Faculty::findOrFail($request->id);
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
        if(dsld_have_user_permission('program-semester_edit') == 0){
            return response()->json(['status' => 'error', 'message'=> "You have no permission."]);
        }
        
        $action = Faculty::findOrFail($request->id);
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
