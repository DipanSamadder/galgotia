<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostCategory;
use Validator;

class PostCategoryController extends Controller
{
    public function index(){
        $page['title'] = 'Post Category List';
        return view('backend.modules.posts.categories.show', compact('page'));
    }
    public function get_ajax_posts_cat (Request $request){
        if($request->page != 1){$start = $request->page * 10;}else{$start = 0;}
        $search = $request->search;
        $sort = $request->sort;

        $data = PostCategory::where('title','!=','');
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
                default:
                    $data->orderBy('created_at', 'desc');
                    break;
            }
        }
        $data = $data->skip($start)->paginate(10);
        return view('backend.modules.posts.categories.ajax_posts_cat', compact('data'));
    }
    public function store(Request $request){
        $slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->title));


        $validator = Validator::make($request->all(), [
            'title' => 'required|max:50',
            'parent_id' => 'required|integer'
        ]);


        if($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => $validator->errors()->all()]);
        }

     
        if(PostCategory::where('slug', strtolower($slug))->first() == null){
            $post_cat = new PostCategory;
            $post_cat->title = $request->title;
            $post_cat->meta_title = $request->title;
            $post_cat->meta_description =  $request->title;
            $post_cat->type = 'posts';
            $post_cat->thumbnail = $request->thumbnail;
            $post_cat->parent_id = $request->parent_id;
            $post_cat->level = $this->parent_level($request->parent_id);
            $post_cat->slug = strtolower($slug);
            
            if($post_cat->save()){
                return response()->json(['status' => 'success', 'message'=> 'Data insert success.']);
            }else{
                return response()->json(['status' => 'error', 'message'=> 'Data insert failed.']);
            }
        }else{
            return response()->json(['status' => 'warning', 'message'=> 'Post & slug already exist! please try agin.']);
        }
    }
    public function parent_level($parent_id){
        if($parent_id > 0){
            return PostCategory::where('id', $parent_id)->first()->level + 1;
        }else{
            return 1;
        } 
    }
    public function edit($id){
        $data = PostCategory::where('id', $id)->first();
        $page['title'] = 'Edit Category Data';
        return view('backend.modules.posts.categories.edit', compact('data', 'page'));
    }
    public function update(Request $request){
        $slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->slug));


        $validator = Validator::make($request->all(), [
            'title' => 'required|max:50',
        ]);


        if($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => $validator->errors()->all()]);
        }
     
        if(PostCategory::whereNotIn('id', [$request->id])->where('slug', strtolower($slug))->first() == null){
            $post_cat =  PostCategory::findOrFail($request->id);
            $post_cat->title = $request->title;
            $post_cat->meta_title = $request->meta_title;
            $post_cat->meta_description =  $request->meta_description;
            $post_cat->keywords =  $request->keywords;
            $post_cat->order = $request->order;
            $post_cat->banner = $request->banner;
            $post_cat->thumbnail = $request->thumbnail;
            $post_cat->created_at = $request->date;
            $post_cat->content = $request->content;
            $post_cat->excerpt = $request->excerpt;
            $post_cat->slug = strtolower($slug);
            
            if($post_cat->save()){
                return response()->json(['status' => 'success', 'message'=> 'Data update success.']);
            }else{
                return response()->json(['status' => 'error', 'message'=> 'Data update failed.']);
            }
        }else{
            return response()->json(['status' => 'warning', 'message'=> 'Page & slug already exist! please try agin.']);
        }
    }
    public function destory(Request $request){
        $post_cat = PostCategory::findOrFail($request->id);
        if($post_cat != ''){
            if($post_cat->delete()){
                return response()->json(['status' => 'success', 'message' => 'Data deleted successully.']);
            }else{
                return response()->json(['status' => 'error', 'message' => 'Data deleted failed.']);
            }
        }else{
            return response()->json(['status' => 'warning', 'message' => 'Data Not found.']);
        }
       
    }
    public function status(Request $request){
        $post_cat = PostCategory::findOrFail($request->id);
        if($post_cat != ''){
            if($post_cat->visibility != $request->status){
                $post_cat->visibility = $request->status;
                $post_cat->save();
                return response()->json(['status' => 'success', 'message' => 'Status update successully.']);
            }else{
                return response()->json(['status' => 'error', 'message' => 'Status update failed.']);
            }
        }else{
            return response()->json(['status' => 'warning', 'message' => 'Data Not found.']);
        }
       
    }
}
