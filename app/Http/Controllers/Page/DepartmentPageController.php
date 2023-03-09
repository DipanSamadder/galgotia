<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\PageSection;

class DepartmentPageController extends Controller
{

    public function index(){
        if(dsld_have_user_permission('program_pages') == 0){
            return redirect()->route('backend.admin')->with('error', 'You have no permission');
        }

        $page['name'] = 'Department page';
        $page['title'] = 'Show all '.$page['name'].'s';
        return view('backend.modules.websites.pages.departments.show', compact('page'));
    }

    public function get_ajax_departments(Request $request){
        if(dsld_have_user_permission('media') == 0){
            return "You have no permission.";
        }

        if($request->page != 1){$start = $request->page * 25;}else{$start = 0;}
        $search = $request->search;
        $sort = $request->sort;
        $template = $request->temp;

        $data = Page::where('type','department_page');
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
       
        if($template != ''){
            switch ($request->temp) {
                case 'program_school_details':
                    $data->where('template', 'program_school_details');
                    break;
                case 'program_school_lists':
                    $data->where('template', 'program_school_lists');
                    break;
                default:
                    break;
            }
        }
        $data = $data->skip($start)->paginate(25);
        return view('backend.modules.websites.pages.departments.ajax_files', compact('data'));
    }

    public function edit($id){
        if(dsld_have_user_permission('pages_edit') == 0){
            return redirect()->route('backend.admin')->with('error', 'You have no permission');
        }
        $data = Page::where('id', $id)->first();
        $section = PageSection::where('page_id', 137)->orderBy('order', 'asc')->where('status', 1)->get();
        $page['title'] = 'Edit Data';
        return view('backend.modules.websites.pages.departments.edit', compact('data', 'page', 'section'));
    }
}
