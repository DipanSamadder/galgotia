<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\User;
use Validator;
use Hash;

class StudentController extends Controller
{
    public function index(){
        if(dsld_have_user_permission('student') == 0){
            return redirect()->route('backend.admin')->with('error', 'You have no permission');
        }
        $page['title'] = 'Student List';
        $page['name'] = 'Student';
        return view('backend.modules.students.show', compact('page'));
    }


    public function get_ajax_students(Request $request){
        if($request->page != 1){$start = $request->page * 25;}else{$start = 0;}
        $search = $request->search;
        $sort = $request->sort;

        $data = Student::where('user_id','!=', '');

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
        return view('backend.modules.students.ajax_files', compact('data'));
    }


    public function store(Request $request){
        if(dsld_have_user_permission('student_add') == 0){
            return response()->json(['status' => 'error', 'message'=> "You have no permission."]);
        }
   
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50',
            'institutes_id' => 'required|integer',
            'programs_id' => 'required|integer',
            'program_sessions_id' => 'required|integer',
            'phone' => 'required|integer',
            'email' => 'required|email|max:255',
            'password' => 'required|max:50',
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
        
        $total = Student::whereYear('created_at', date('Y'))->max('roll');
        
        if($total !=''){
            $roll =  $request->institutes_id.date('Y').str_pad(substr($total, -3) + 1, 3, "0", STR_PAD_LEFT);
        }else{
            $roll =  $request->institutes_id.date('Y').str_pad(1, 3, "0", STR_PAD_LEFT);
        }

        $uniq_roll = Student::where('roll', $roll)->first();

        if($uniq_roll == ''){

            $existing_user = User::where('email', $request->email)->orWhere('phone', $request->phone)->first();
            if($existing_user == ""){

                $user = new User;
                $user->name = $request->name;
                $user->email = $request->email;
                $user->password =  Hash::make($request->password);
                $user->phone =  $request->phone;
                $user->user_type = 'students';
                $user->avatar_original = $request->avatar_original;
                $user->banned = 0;
                $user->save();

                $action = new Student;
                $action->user_id =  $user->id;
                $action->about = $request->about;
                $action->fname = $request->fname;
                $action->mname = $request->mname;
                $action->dob = $request->dob;
                $action->blood = $request->blood;
                $action->registration = $request->registration;
                $action->roll = $roll;
                $action->social_links = json_encode($social_link);
                $action->programs_id = $request->programs_id;
                $action->program_sessions_id = $request->program_sessions_id;
                $action->created_by = $request->created_by;
                $action->institutes_id = $request->institutes_id;
                $action->order = $request->order;
                $action->status = $request->status;
                
                if($action->save()){
                    return response()->json(['status' => 'success', 'message'=> 'Data insert success.']);
                }else{
                    return response()->json(['status' => 'error', 'message'=> 'Data insert failed.']);
                }
            }else{

                $action = new Student;
                $action->user_id =  $existing_user->id;
                $action->about = $request->about;
                $action->fname = $request->fname;
                $action->mname = $request->mname;
                $action->dob = $request->dob;
                $action->blood = $request->blood;
                $action->registration = $request->registration;
                $action->roll = $roll;
                $action->social_links = json_encode($social_link);
                $action->programs_id = $request->programs_id;
                $action->program_sessions_id = $request->program_sessions_id;
                $action->created_by = $request->created_by;
                $action->institutes_id = $request->institutes_id;
                $action->order = $request->order;
                $action->status = $request->status;
                
                if($action->save()){
                    return response()->json(['status' => 'success', 'message'=> 'Data insert success.']);
                }else{
                    return response()->json(['status' => 'error', 'message'=> 'Data insert failed.']);
                }
            }
        }else{
            return response()->json(['status' => 'warning', 'message'=> 'Roll Id already booked.']);
        }
        
    }

    public function edit(Request $request){
        if(dsld_have_user_permission('student_edit') == 0){
            return redirect()->route('backend.admin')->with('error', 'You have no permission');
        }
        $data = Student::where('id', $request->id)->first();
        return view('backend.modules.students.edit', compact('data'));
    }


    public function update(Request $request){
        if(dsld_have_user_permission('student_edit') == 0){
            return response()->json(['status' => 'error', 'message'=> "You have no permission."]);
        }
        

       
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50',
            'institutes_id' => 'required|integer',
            'programs_id' => 'required|integer',
            'program_sessions_id' => 'required|integer',
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


        $user = User::findOrFail($request->created_by);
        $user->name = $request->name;
        $user->avatar_original = $request->avatar_original;
        $user->save();

        $action = Student::findOrFail($request->id);
        $action->user_id =  $user->id;
        $action->about = $request->about;
        $action->fname = $request->fname;
        $action->mname = $request->mname;
        $action->dob = $request->dob;
        $action->blood = $request->blood;
        $action->social_links = json_encode($social_link);
        $action->programs_id = $request->programs_id;
        $action->program_sessions_id = $request->program_sessions_id;
        $action->registration = $request->registration;
        $action->created_by = $request->created_by;
        $action->institutes_id = $request->institutes_id;
        $action->order = $request->order;
        $action->status = $request->status;
    
        
        if($action->save()){
            return response()->json(['status' => 'success', 'message'=> 'Data update success.']);
        }else{
            return response()->json(['status' => 'error', 'message'=> 'Data update failed.']);
        }
        
    }


    public function destory(Request $request){
        if(dsld_have_user_permission('student_delete') == 0){
            return response()->json(['status' => 'error', 'message'=> "You have no permission."]);
        }
        $action = Student::findOrFail($request->id);
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
        if(dsld_have_user_permission('student_edit') == 0){
            return response()->json(['status' => 'error', 'message'=> "You have no permission."]);
        }
        
        $action = Student::findOrFail($request->id);
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
