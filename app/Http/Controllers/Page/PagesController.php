<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\PageSection;
use App\Models\PageMeta;
use App\Models\Menu;
use App\Models\Post;

use Validator;


class PagesController extends Controller
{
    public function index(){
        if(dsld_have_user_permission('pages') == 0){
            return redirect()->route('backend.admin')->with('error', 'You have no permission');
        }

        $page['title'] = 'Show all pages';
        return view('backend.modules.websites.pages.show', compact('page'));
    }
    public function get_ajax_pages(Request $request){
        if(dsld_have_user_permission('media') == 0){
            return "You have no permission.";
        }

        if($request->page != 1){$start = $request->page * 15;}else{$start = 0;}
        $search = $request->search;
        $sort = $request->sort;

        $data = Page::where('type','custom_page');
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
        $data = $data->skip($start)->paginate(15);
        return view('backend.modules.websites.pages.ajax_pages', compact('data'));
    }
    public function store(Request $request){
        if(dsld_have_user_permission('pages_add') == 0){
            return response()->json(['status' => 'error', 'message'=> "You have no permission."]);
        }
        $slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->title));


        $validator = Validator::make($request->all(), [
            'title' => 'required|max:350',
            'status' => 'required|integer'
        ]);


        if($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => $validator->errors()->all()]);
        }

        if(isset($request->parent)){
            $parent_slug = $this->parent_slug($request->parent);
            if($request->type =='program_page'){
                $slug = $parent_slug.'/'.strtolower($slug);
            }
        }
        
        $check_d =  Page::where('slug', $slug)->where('type', $request->type)->first();
        
        if(empty($check_d)){
            $page = new Page;
            $page->title = $request->title;
            $page->meta_title = $request->title;
            $page->meta_description =  $request->title;
            $page->keywords =  $request->title;
            if(isset($request->parent)){
                $page->parent =  $request->parent;
                $page->level =  $this->parent_level($request->parent);
            }else{
                $page->parent =  0;
                $page->level =  1;
            }
            $page->slug = $slug;
            $page->type = $request->type;
            $page->template = 'default';
            $page->is_meta = 0;
            $page->banner = $request->banner;
            $page->status = $request->status;
            $page->content = $request->content;
            
            if($page->save()){
                return response()->json(['status' => 'success', 'message'=> 'Data insert success.']);
            }else{
                return response()->json(['status' => 'error', 'message'=> 'Data insert failed.']);
            }
        }else{
            return response()->json(['status' => 'warning', 'message'=> 'Page & slug already exist! please try agin.']);
        }
    }
    public function edit($id){
        if(dsld_have_user_permission('pages_edit') == 0){
            return redirect()->route('backend.admin')->with('error', 'You have no permission');
        }
        $data = Page::where('id', $id)->first();
        $section = PageSection::where('page_id', $id)->orderBy('order', 'asc')->where('status', 1)->get();
        $page['title'] = 'Edit Data';
        return view('backend.modules.websites.pages.edit', compact('data', 'page', 'section'));
    }
    public function parent_level($parent_id){
        if($parent_id > 0){
            return Page::where('id', $parent_id)->first()->level + 1;
        }else{
            return 1;
        } 
    }
    public function parent_slug($parent_id){
        if($parent_id > 0){
            return Page::where('id', $parent_id)->first()->slug;
        }
    }
    public function show_custom_page($page, $slug1 = null, $slug2 = null, $slug3 = null){

        if($slug1 == '' && $slug2 == '' && $slug3 == ''){
            $page = Page::where('slug', $page)->first();
        }else if($slug2 == '' && $slug3 == ''){
            $page = Page::where('slug', $page.'/'.$slug1)->first();
        }else if($slug3 == ''){
            $page = Page::where('slug', $page.'/'.$slug1.'/'.$slug2)->first();
        }else{
            $page = Page::where('slug', $page.'/'.$slug1.'/'.$slug2.'/'.$slug3)->first();
        }

        $header_menu = Menu::where('type', 'header_menu')->where('status', 0)->orderBy('order', 'asc')->get();
        if($page != null){
             if($page->template == 'blogs_template'){
                $posts = Post::where('type', 'posts')->paginate(6);
                return view('frontend.pages.'.$page->template, compact('page', 'header_menu', 'posts'));

            }else if($page->template != null){
                return view('frontend.pages.'.$page->template, compact('page', 'header_menu'));
            } else{
                 return view('frontend.pages.default', compact('page', 'header_menu'));
            }
        }else{
            return abort(404);
        }
    }
    public function update(Request $request){
        if(dsld_have_user_permission('pages_edit') == 0){
            return response()->json(['status' => 'error', 'message'=> "You have no permission."]);
        }
        $slug = preg_replace('[^A-Za-z0-9\-]', '', str_replace(' ', '-', $request->slug));


        $validator = Validator::make($request->all(), [
            'title' => 'required|max:350',
            'status' => 'required|integer'
        ]);


        if($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => $validator->errors()->all()]);
        }

      
        if(is_array($request->setting) && count($request->setting) > 0){
            foreach($request->setting as $key => $value){
                $setting = PageMeta::where('meta_key', $value)->where('page_id', $request->id)->first();
                if($setting != ''){
                    if($request[$value] !='' || $request[$value] !='null'){
                        $setting->meta_value = $request[$value];
                        $setting->save();
                    }
                }else{
                    if($request[$value] !='' || $request[$value] !='null'){
                        $setting = new PageMeta;
                        $setting->meta_key = $value;
                        $setting->meta_value = $request[$value];
                        $setting->page_id = $request->id;
                        $setting->save();
                    }
                } 
            }
        }
        
        if(is_array($request->setting_slider) && count($request->setting_slider) > 0){

            foreach($request->setting_slider as $key => $value){
                if($value !=''){
                    $setting2 = PageMeta::where('meta_key', $value)->where('page_id', $request->id)->first();
                    if($setting2 != ''){
                        if($request[$value] !='' || $request[$value] !='null'){
                            $setting2->meta_value = json_encode($request[$value]);
                            $setting2->save();
                        }                        
                    }else{
                        if($request[$value] !='' || $request[$value] !='null'){
                            $setting2 = new PageMeta;
                            $setting2->meta_key = $value;
                            $setting2->meta_value = json_encode($request[$value]);
                            $setting2->page_id = $request->id;
                            $setting2->save();
                        } 
                    }
                }
            }
        }
        

        if(Page::whereNotIn('id', [$request->id])->where('slug', strtolower($slug))->first() == null){
            $page =  Page::findOrFail($request->id);
            $page->title = $request->title;
            $page->meta_title = $request->meta_title;
            $page->meta_description =  $request->meta_description;
            $page->keywords =  $request->keywords;
            $page->parent =  $request->parent;
            $page->level =  $this->parent_level($request->parent);
            $page->type = $request->type;
            $page->template = $request->template;
            $page->is_meta = 0;
            $page->order = $request->order;
            $page->banner = $request->banner;
            $page->status = $request->status;
            $page->created_at = $request->date;
            $page->content = $request->content;
            $page->slug = strtolower($slug);
            
            if($page->save()){
                return response()->json(['status' => 'success', 'message'=> 'Data update success.']);
            }else{
                return response()->json(['status' => 'error', 'message'=> 'Data update failed.']);
            }
        }else{
            return response()->json(['status' => 'warning', 'message'=> 'Page & slug already exist! please try agin.']);
        }

    }
    public function update_extra_content(Request $request){
        if(dsld_have_user_permission('pages_edit') == 0){
            return response()->json(['status' => 'error', 'message'=> "You have no permission."]);
        }
        // echo '<pre>';
        // print_r($request->all());
         foreach($request->type as $key => $type){
             $meta_data = PageMeta::where('meta_key', $type)->where('page_id', $request->page_id)->first();
             if($meta_data == ''){
                 if(gettype($request[$type]) == 'array'){
                     $new_data = new PageMeta;
                     $new_data->meta_key = $type;
                     $new_data->meta_value = json_encode($request[$type]);
                     $new_data->page_id = $request->page_id;
                     $new_data->section_id = $request->section_id;
                     $new_data->save();
                 }else{
                     $new_data = new PageMeta;
                     $new_data->meta_key = $type;
                     $new_data->meta_value = $request[$type];
                     $new_data->page_id = $request->page_id;
                     $new_data->section_id = $request->section_id;
                     $new_data->save();
                 }
             }else{
                 
                 if(gettype($request[$type]) == 'array'){
                     $meta_data->meta_value =  json_encode($request[$type]);
                     $meta_data->save();
                 }else{
                     $meta_data->meta_value =  $request[$type];
                     $meta_data->save();
                 }
                 
             }
         }
 
         return back();
 
         /**$page =  Page::findOrFail($request->id);
         $page->title = $request->title;
         $page->order = $request->order;
         $page->created_at = $request->date;
         $page->content = $request->content;
         $page->slug = strtolower($slug);**/
 
     }
    public function destory(Request $request){
        if(dsld_have_user_permission('pages_delete') == 0 || dsld_have_user_permission('office_delete') == 0 ||dsld_have_user_permission('timelines_delete') == 0 ){
            return response()->json(['status' => 'error', 'message'=> "You have no permission."]);
        }
        $page = Page::findOrFail($request->id);
        if($page != ''){
            if($page->delete()){
                return response()->json(['status' => 'success', 'message' => 'Data deleted successully.']);
            }else{
                return response()->json(['status' => 'error', 'message' => 'Data deleted failed.']);
            }
        }else{
            return response()->json(['status' => 'warning', 'message' => 'Data Not found.']);
        }
       
    }
    public function status(Request $request){
        if(dsld_have_user_permission('pages_edit') == 0){
            return response()->json(['status' => 'error', 'message'=> "You have no permission."]);
        }
        
        $page = Page::findOrFail($request->id);
        if($page != ''){
            if($page->status != $request->status){
                $page->status = $request->status;
                $page->save();
                return response()->json(['status' => 'success', 'message' => 'Status update successully.']);
            }else{
                return response()->json(['status' => 'error', 'message' => 'Status update failed.']);
            }
        }else{
            return response()->json(['status' => 'warning', 'message' => 'Data Not found.']);
        }
       
    }


    public function testimonials_index(){
        if(dsld_have_user_permission('testimonials') == 0){
            return redirect()->route('backend.admin')->with('error', 'You have no permission');
        }

        $page['name'] = 'Testimonial';
        $page['title'] = 'Show all '.$page['name'].'s';
        return view('backend.modules.websites.pages.testimonials.show', compact('page'));
    }
    public function testimonials_get_ajax_files(Request $request){
        if(dsld_have_user_permission('testimonials') == 0){
            return "You have no permission.";
        }

        if($request->page != 1){$start = $request->page * 15;}else{$start = 0;}
        $search = $request->search;
        $sort = $request->sort;

        $data = Page::where('type','testimonials');
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
        $data = $data->skip($start)->paginate(15);
        
        return view('backend.modules.websites.pages.testimonials.ajax_files', compact('data'));
    }

    public function testimonials_store(Request $request){
        if(dsld_have_user_permission('testimonials_add') == 0){
            return response()->json(['status' => 'error', 'message'=> "You have no permission."]);
        }
 
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:50',
            'package' => 'required|max:50',
            'company' => 'required|max:50',
            'content' => 'required|max:350',
            'status' => 'required|integer'
        ]);


        if($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => $validator->errors()->all()]);
        }

        $arr = array(
            'package' => $request->package,
            'company' => $request->company
        );
        $page = new Page;
        $page->title = $request->title;
        $page->meta_title = $request->title;
        $page->meta_description =  $request->title;
        $page->keywords =  $request->title;
        $page->parent =  0;
        $page->level =  1;
        $page->type = 'testimonials';
        $page->template = '-';
        $page->is_meta = 1;
        $page->banner = $request->banner;
        $page->status = $request->status;
        $page->content = $request->content;
        $page->meta_fields = json_encode($arr);
        $page->slug = '-';
        
        if($page->save()){
            return response()->json(['status' => 'success', 'message'=> 'Data insert success.']);
        }else{
            return response()->json(['status' => 'error', 'message'=> 'Data insert failed.']);
        }

    }

    public function testimonials_edit(Request $request){
        if(dsld_have_user_permission('testimonials_edit') == 0){
            return redirect()->route('backend.admin')->with('error', 'You have no permission');
        }
        $data = Page::where('id', $request->id)->first();
        return view('backend.modules.websites.pages.testimonials.edit', compact('data'));
    }

    public function testimonials_update(Request $request){
        if(dsld_have_user_permission('testimonials_edit') == 0){
            return response()->json(['status' => 'error', 'message'=> "You have no permission."]);
        }
        $slug = preg_replace('[^A-Za-z0-9\-]', '', str_replace(' ', '-', $request->slug));


        $validator = Validator::make($request->all(), [
            'title' => 'required|max:50',
            'package' => 'required|max:50',
            'company' => 'required|max:50',
            'content' => 'required|max:350',
            'status' => 'required|integer'
        ]);


        if($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => $validator->errors()->all()]);
        }

      
        $page =  Page::findOrFail($request->id);

        $arr = array(
            'package' => $request->package,
            'company' => $request->company
        );

        $page->title = $request->title;
        $page->banner = $request->banner;
        $page->status = $request->status;
        $page->content = $request->content;
        $page->meta_fields = json_encode($arr);
            
        if($page->save()){
            return response()->json(['status' => 'success', 'message'=> 'Data update success.']);
        }else{
            return response()->json(['status' => 'error', 'message'=> 'Data update failed.']);
        }
       

    }
    
    public function news_event_index(){
        if(dsld_have_user_permission('newsevents') == 0){
            return redirect()->route('backend.admin')->with('error', 'You have no permission');
        }

        $page['name'] = 'News & Event';
        $page['title'] = 'Show all '.$page['name'].'s';
        return view('backend.modules.websites.pages.news_events.show', compact('page'));
    }
    public function news_event_get_ajax_files(Request $request){
        if(dsld_have_user_permission('newsevents') == 0){
            return "You have no permission.";
        }

        if($request->page != 1){$start = $request->page * 15;}else{$start = 0;}
        $search = $request->search;
        $sort = $request->sort;

        $data = Page::where('type','news_events');
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
        $data = $data->skip($start)->paginate(15);
        
        return view('backend.modules.websites.pages.news_events.ajax_files', compact('data'));
    }

    public function news_event_store(Request $request){
        if(dsld_have_user_permission('newsevents_add') == 0){
            return response()->json(['status' => 'error', 'message'=> "You have no permission."]);
        }
 
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:150',
            'cat_type' => 'required|max:50',
            'banner' => 'required|max:50',
            'status' => 'required|integer'
        ]);

        $slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->title));

        if($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => $validator->errors()->all()]);
        }

        if(Page::where('slug', strtolower($slug))->first() == null){
            $page = new Page;
            $page->title = $request->title;
            $page->meta_title = $request->title;
            $page->meta_description =  $request->title;
            $page->keywords =  $request->title;
            $page->parent =  0;
            $page->level =  1;
            $page->type = 'news_events';
            $page->cat_type = $request->cat_type;
            $page->template = '-';
            $page->is_meta = 0;
            $page->banner = $request->banner;
            $page->status = $request->status;
            $page->content = $request->content;
            $page->order = $request->order;
            $page->meta_fields = '';
            $page->slug = $slug;
            
            if($page->save()){
                return response()->json(['status' => 'success', 'message'=> 'Data insert success.']);
            }else{
                return response()->json(['status' => 'error', 'message'=> 'Data insert failed.']);
            }
        }else{
            return response()->json(['status' => 'warning', 'message'=> 'Page & slug already exist! please try agin.']);
        }
    }

    public function news_event_edit(Request $request){
        if(dsld_have_user_permission('newsevents_edit') == 0){
            return redirect()->route('backend.admin')->with('error', 'You have no permission');
        }
        $data = Page::where('id', $request->id)->first();
        return view('backend.modules.websites.pages.news_events.edit', compact('data'));
    }

    public function news_event_update(Request $request){
        if(dsld_have_user_permission('newsevents_edit') == 0){
            return response()->json(['status' => 'error', 'message'=> "You have no permission."]);
        }
        $slug = preg_replace('[^A-Za-z0-9\-]', '', str_replace(' ', '-', $request->slug));


        $validator = Validator::make($request->all(), [
            'title' => 'required|max:150',
            'cat_type' => 'required|max:50',
            'banner' => 'required|max:50',
            'status' => 'required|integer'
        ]);


        if($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => $validator->errors()->all()]);
        }

      
        $page =  Page::findOrFail($request->id);


        $page->cat_type = $request->cat_type;
        $page->title = $request->title;
        $page->banner = $request->banner;
        $page->status = $request->status;
        $page->content = $request->content;
        $page->order = $request->order;
            
        if($page->save()){
            return response()->json(['status' => 'success', 'message'=> 'Data update success.']);
        }else{
            return response()->json(['status' => 'error', 'message'=> 'Data update failed.']);
        }
       

    }
}
