<?php

namespace App\Http\Controllers\Program;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Program;
use Validator;

class ProgramController extends Controller
{
    public function index(){
        if(dsld_have_user_permission('programs') == 0){
            return redirect()->route('backend.admin')->with('error', 'You have no permission');
        }
        $page['title'] = 'Program List';
        $page['name'] = 'Program';
        return view('backend.modules.institutes.programs.show', compact('page'));
    }


    public function get_ajax_programs(Request $request){
        if($request->page != 1){$start = $request->page * 25;}else{$start = 0;}
        $search = $request->search;
        $sort = $request->sort;

        $data = Program::where('title','!=', '');

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
        return view('backend.modules.institutes.programs.ajax_programs', compact('data'));
    }

    public function store(Request $request){
        if(dsld_have_user_permission('programs_add') == 0){
            return response()->json(['status' => 'error', 'message'=> "You have no permission."]);
        }
        $slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->title));


        $validator = Validator::make($request->all(), [
            'title' => 'required|max:50',
            'institutes_id' => 'required|integer',
            'user_id' => 'required|integer',
            'status' => 'required|integer'
        ]);


        if($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => $validator->errors()->all()]);
        }

        $semester = new Program;
        $semester->title = $request->title;
        $semester->parent_id =  empty($request->parent_id) ? 0 : $request->parent_id;
        $semester->level =  $this->get_level($request->parent_id);
        $semester->institutes_id =  $request->institutes_id;
        $semester->user_id =  $request->user_id;
        $semester->order = $request->order;;
        $semester->status = $request->status;
        
        if($semester->save()){
            return response()->json(['status' => 'success', 'message'=> 'Data insert success.']);
        }else{
            return response()->json(['status' => 'error', 'message'=> 'Data insert failed.']);
        }
        
    }

    public function get_level($parent_id){
        if($parent_id > 0){
            return Program::where('id', $parent_id)->first()->level + 1;
        }else{
            return 1;
        } 
    }

    public function edit(Request $request){
        if(dsld_have_user_permission('programs_edit') == 0){
            return redirect()->route('backend.admin')->with('error', 'You have no permission');
        }

        $data = Program::where('id', $request->id)->where('user_id', $request->user_id)->first();
        return view('backend.modules.institutes.programs.edit', compact('data'));
    }


    public function update(Request $request){
        if(dsld_have_user_permission('programs_edit') == 0){
            return response()->json(['status' => 'error', 'message'=> "You have no permission."]);
        }
        

        $validator = Validator::make($request->all(), [
            'title' => 'required|max:50',
            'institutes_id' => 'required|integer',
            'status' => 'required|integer'
        ]);


        if($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => $validator->errors()->all()]);
        }
             
        $semester =  Program::findOrFail($request->id);
        $semester->title = $request->title;
        $semester->parent_id =  empty($request->parent_id) ? 0 : $request->parent_id;
        $semester->level =  $this->get_level($request->parent_id);
        $semester->institutes_id = $request->institutes_id;
        $semester->order = $request->order;
        $semester->status = $request->status;
        
        if($semester->save()){
            return response()->json(['status' => 'success', 'message'=> 'Data update success.']);
        }else{
            return response()->json(['status' => 'error', 'message'=> 'Data update failed.']);
        }
        
    }


    public function destory(Request $request){
        if(dsld_have_user_permission('programs_delete') == 0){
            return response()->json(['status' => 'error', 'message'=> "You have no permission."]);
        }
        $semester = Program::findOrFail($request->id);
        if($semester != ''){
            if($semester->delete()){
                return response()->json(['status' => 'success', 'message' => 'Data deleted successully.']);
            }else{
                return response()->json(['status' => 'error', 'message' => 'Data deleted failed.']);
            }
        }else{
            return response()->json(['status' => 'warning', 'message' => 'Data Not found.']);
        }
       
    }


    public function status(Request $request){
        if(dsld_have_user_permission('programs_edit') == 0){
            return response()->json(['status' => 'error', 'message'=> "You have no permission."]);
        }
        
        $semester = Program::findOrFail($request->id);
        if($semester != ''){
            if($semester->status != $request->status){
                $semester->status = $request->status;
                $semester->save();
                return response()->json(['status' => 'success', 'message' => 'Status update successully.']);
            }else{
                return response()->json(['status' => 'error', 'message' => 'Status update failed.']);
            }
        }else{
            return response()->json(['status' => 'warning', 'message' => 'Data Not found.']);
        }
       
    }
}
