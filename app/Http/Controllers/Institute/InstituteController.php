<?php

namespace App\Http\Controllers\Institute;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Institute;
use Validator;


class InstituteController extends Controller
{
    public function index(){
        if(dsld_have_user_permission('institute') == 0){
            return redirect()->route('backend.admin')->with('error', 'You have no permission');
        }
        $page['title'] = 'Institute List';
        $page['name'] = 'Institute';
        return view('backend.modules.institutes.show', compact('page'));
    }


    public function get_ajax_institutes(Request $request){
        if($request->page != 1){$start = $request->page * 25;}else{$start = 0;}
        $search = $request->search;
        $sort = $request->sort;

        $data = Institute::where('title','!=', '');

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
        return view('backend.modules.institutes.ajax_institutes', compact('data'));
    }


    public function store(Request $request){
        if(dsld_have_user_permission('institute_add') == 0){
            return response()->json(['status' => 'error', 'message'=> "You have no permission."]);
        }

        $validator = Validator::make($request->all(), [
            'title' => 'required|max:50',
            'phone' => 'required|integer',
            'email' => 'required|email',
            'user_id' => 'required|integer',
            'status' => 'required|integer'
        ]);


        if($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => $validator->errors()->all()]);
        }

        $social_link = array();
        foreach($request->socials as $key => $value){
            array_push($social_link, array($value => $request[$value]));
        }
        
        $owner_details = array();
        foreach($request->owner as $key => $value){
            array_push($owner_details, array($value => $request[$value]));
        }

        $institute = new Institute;
        $institute->title = $request->title;
        $institute->institute_types_id = $request->institute_types_id;
        $institute->phone = $request->phone;
        $institute->email = $request->email;
        $institute->website = $request->website;
        $institute->owner_details =   json_encode($owner_details);
        $institute->social_link =  json_encode($social_link);
        $institute->map =  $request->map;
        $institute->year =  empty($request->year) ? 0 : $request->year;
        $institute->logo =  empty($request->logo) ? 0 : $request->logo ;
        $institute->address =  $request->address;
        $institute->city =  empty($request->city) ? 0 : $request->city;
        $institute->state =  empty($request->state) ? 0 : $request->state;
        $institute->country =  empty($request->country) ? 0 : $request->country;
        $institute->order = $request->order;
        $institute->status = $request->status;
        
        if($institute->save()){
            return response()->json(['status' => 'success', 'message'=> 'Data insert success.']);
        }else{
            return response()->json(['status' => 'error', 'message'=> 'Data insert failed.']);
        }
        
    }

    public function edit(Request $request){
        if(dsld_have_user_permission('institute_edit') == 0){
            return redirect()->route('backend.admin')->with('error', 'You have no permission');
        }

        $data = Institute::where('id', $request->id)->first();

        return view('backend.modules.institutes.edit', compact('data'));
    }


    public function update(Request $request){
        if(dsld_have_user_permission('institute_edit') == 0){
            return response()->json(['status' => 'error', 'message'=> "You have no permission."]);
        }
        

        $validator = Validator::make($request->all(), [
            'title' => 'required|max:50',
            'phone' => 'required|integer',
            'email' => 'required|email',
            'user_id' => 'required|integer',
            'status' => 'required|integer'
        ]);


        if($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => $validator->errors()->all()]);
        }
             
        $social_link = array();
        foreach($request->socials as $key => $value){
            array_push($social_link, array($value => $request[$value]));
        }
        
        $owner_details = array();
        foreach($request->owner as $key => $value){
            array_push($owner_details, array($value => $request[$value]));
        }

        $institute = Institute::findOrFail($request->page_id);
        $institute->title = $request->title;
        $institute->institute_types_id = $request->institute_types_id;
        $institute->phone = $request->phone;
        $institute->email = $request->email;
        $institute->website = $request->website;
        $institute->owner_details =   json_encode($owner_details);
        $institute->social_link =  json_encode($social_link);
        $institute->map =  $request->map;
        $institute->year =  empty($request->year) ? 0 : $request->year;
        $institute->logo =  empty($request->logo) ? 0 : $request->logo ;
        $institute->address =  $request->address;
        $institute->city =  empty($request->city) ? 0 : $request->city;
        $institute->state =  empty($request->state) ? 0 : $request->state;
        $institute->country =  empty($request->country) ? 0 : $request->country;
        $institute->order = $request->order;
        $institute->status = $request->status;
        
        if($institute->save()){
            return response()->json(['status' => 'success', 'message'=> 'Data update success.']);
        }else{
            return response()->json(['status' => 'error', 'message'=> 'Data update failed.']);
        }
        
    }


    public function destory(Request $request){
        if(dsld_have_user_permission('institute_delete') == 0){
            return response()->json(['status' => 'error', 'message'=> "You have no permission."]);
        }
        $type = Institute::findOrFail($request->id);
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
        if(dsld_have_user_permission('institute_edit') == 0){
            return response()->json(['status' => 'error', 'message'=> "You have no permission."]);
        }
        
        $data = Institute::findOrFail($request->id);
        if($data != ''){
            if($data->status != $request->status){
                $data->status = $request->status;
                $data->save();
                return response()->json(['status' => 'success', 'message' => 'Status update successully.']);
            }else{
                return response()->json(['status' => 'error', 'message' => 'Status update failed.']);
            }
        }else{
            return response()->json(['status' => 'warning', 'message' => 'Data Not found.']);
        }
       
    }
}
