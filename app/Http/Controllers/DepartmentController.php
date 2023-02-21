<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use Validator;

class DepartmentController extends Controller
{
    public function index(){
        if(dsld_have_user_permission('program-semester') == 0){
            return redirect()->route('backend.admin')->with('error', 'You have no permission');
        }
        $page['title'] = 'Department List';
        $page['name'] = 'Department';
        return view('backend.modules.institutes.departments.show', compact('page'));
    }


    public function get_ajax_departments(Request $request){
        if($request->page != 1){$start = $request->page * 25;}else{$start = 0;}
        $search = $request->search;
        $sort = $request->sort;

        $data = Department::where('title','!=', '');

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
        return view('backend.modules.institutes.departments.ajax_files', compact('data'));
    }

    public function store(Request $request){
        if(dsld_have_user_permission('program-semester_add') == 0){
            return response()->json(['status' => 'error', 'message'=> "You have no permission."]);
        }
        $slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->title));


        $validator = Validator::make($request->all(), [
            'title' => 'required|max:50',
            'created_by' => 'required|integer',
            'status' => 'required|integer'
        ]);


        if($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => $validator->errors()->all()]);
        }

        $action = new Department;
        $action->title = $request->title;
        $action->created_by =  $request->created_by;
        $action->order = $request->order;;
        $action->status = $request->status;
        
        if($action->save()){
            return response()->json(['status' => 'success', 'message'=> 'Data insert success.']);
        }else{
            return response()->json(['status' => 'error', 'message'=> 'Data insert failed.']);
        }
        
    }

    public function edit(Request $request){
        if(dsld_have_user_permission('program-semester_edit') == 0){
            return redirect()->route('backend.admin')->with('error', 'You have no permission');
        }

        $data = Department::where('id', $request->id)->where('created_by', $request->created_by)->first();
        return view('backend.modules.institutes.departments.edit', compact('data'));
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
             
        $action =  Department::findOrFail($request->id);
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
        $action = Department::findOrFail($request->id);
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
        
        $action = Department::findOrFail($request->id);
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
