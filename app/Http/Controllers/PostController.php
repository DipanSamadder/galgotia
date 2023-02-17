<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Menu;
use Validator;

class PostController extends Controller
{
    public function index(){
        if(dsld_have_user_permission('posts') == 0){
            return redirect()->route('backend.admin')->with('error', 'You have no permission');
        }

        $page['title'] = 'Post List';
        return view('backend.modules.posts.show', compact('page'));
    }
    public function get_ajax_posts(Request $request){
        if($request->page != 1){$start = $request->page * 25;}else{$start = 0;}
        $search = $request->search;
        $sort = $request->sort;

        $data = Post::where('type','posts');
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
                    $data->where('visibility', 1);
                    break;
                case 'deactive':
                    $data->where('visibility', 0);
                    break;
                default:
                    $data->orderBy('created_at', 'desc');
                    break;
            }
        }
        $data = $data->skip($start)->paginate(25);
        return view('backend.modules.posts.ajax_posts', compact('data'));
    }
    public function store(Request $request){
        if(dsld_have_user_permission('posts_add') == 0){
            return response()->json(['status' => 'error', 'message'=> "You have no permission."]);
        }
        $slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->title));


        $validator = Validator::make($request->all(), [
            'title' => 'required|max:50',
            'status' => 'required|integer'
        ]);


        if($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => $validator->errors()->all()]);
        }

     
        if(Post::where('slug', strtolower($slug))->first() == null){
            $post = new Post;
            $post->title = $request->title;
            $post->meta_title = $request->title;
            $post->meta_description =  $request->title;
            $post->keywords =  $request->title;
            $post->type = 'posts';
            $post->thumbnail = $request->thumbnail;
            $post->content = $request->content;
            $post->slug = strtolower($slug);
            
            if($post->save()){
                return response()->json(['status' => 'success', 'message'=> 'Data insert success.']);
            }else{
                return response()->json(['status' => 'error', 'message'=> 'Data insert failed.']);
            }
        }else{
            return response()->json(['status' => 'warning', 'message'=> 'Post & slug already exist! please try agin.']);
        }
    }
    public function edit($id){
        if(dsld_have_user_permission('posts_edit') == 0){
            return redirect()->route('backend.admin')->with('error', 'You have no permission');
        }

        $data = Post::where('id', $id)->first();
        $page['title'] = 'Edit Data';
        return view('backend.modules.posts.edit', compact('data', 'page'));
    }
    public function update(Request $request){
        if(dsld_have_user_permission('posts_edit') == 0){
            return response()->json(['status' => 'error', 'message'=> "You have no permission."]);
        }
        
        $slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->slug));


        $validator = Validator::make($request->all(), [
            'title' => 'required|max:50',
            'visibility' => 'required|integer'
        ]);


        if($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => $validator->errors()->all()]);
        }
     
        if(Post::whereNotIn('id', [$request->id])->where('slug', strtolower($slug))->first() == null){
            $post =  Post::findOrFail($request->id);
            $post->title = $request->title;
            $post->meta_title = $request->meta_title;
            $post->meta_description =  $request->meta_description;
            $post->keywords =  $request->keywords;
            $post->order = $request->order;
            $post->banner = $request->banner;
            $post->catalogue = $request->catalogue;
            $post->thumbnail = $request->thumbnail;
            $post->visibility = $request->visibility;
            $post->created_at = $request->date;
            $post->content = $request->content;
            $post->slug = strtolower($slug);
            
            if($post->save()){
                return response()->json(['status' => 'success', 'message'=> 'Data update success.']);
            }else{
                return response()->json(['status' => 'error', 'message'=> 'Data update failed.']);
            }
        }else{
            return response()->json(['status' => 'warning', 'message'=> 'Page & slug already exist! please try agin.']);
        }
    }
    public function destory(Request $request){
        if(dsld_have_user_permission('posts_delete') == 0){
            return response()->json(['status' => 'error', 'message'=> "You have no permission."]);
        }
        $post = Post::findOrFail($request->id);
        if($post != ''){
            if($post->delete()){
                return response()->json(['status' => 'success', 'message' => 'Data deleted successully.']);
            }else{
                return response()->json(['status' => 'error', 'message' => 'Data deleted failed.']);
            }
        }else{
            return response()->json(['status' => 'warning', 'message' => 'Data Not found.']);
        }
       
    }
    public function status(Request $request){
        if(dsld_have_user_permission('posts_edit') == 0){
            return response()->json(['status' => 'error', 'message'=> "You have no permission."]);
        }
        
        $post = Post::findOrFail($request->id);
        if($post != ''){
            if($post->visibility != $request->status){
                $post->visibility = $request->status;
                $post->save();
                return response()->json(['status' => 'success', 'message' => 'Status update successully.']);
            }else{
                return response()->json(['status' => 'error', 'message' => 'Status update failed.']);
            }
        }else{
            return response()->json(['status' => 'warning', 'message' => 'Data Not found.']);
        }
       
    }
    public function show_custom_blogs($slug){
        $post = Post::where('slug', $slug)->first();
        $header_menu = Menu::where('type', 'header_menu')->where('status', 0)->orderBy('order', 'asc')->get();
        
        if($post != null){
            return view('frontend.blogs.single', compact('post', 'header_menu')); 
        }

    }
}
