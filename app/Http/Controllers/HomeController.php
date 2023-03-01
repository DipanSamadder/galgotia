<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use App\Models\Menu;
use App\Models\Page;
use App\Models\User;
use App\Models\Institute;
use App\Models\Program;
use App\Models\State;
use App\Models\LibraryBook;
use Auth;

class HomeController extends Controller
{
    function admin_dashboard(){
        $page['title'] = 'Dashboard';
        return view('backend.index', compact('page'));
        
    }
    function clear_cache(){
        Artisan::call('cache:clear');
        Artisan::call('config:cache');
        Artisan::call('view:clear');
        Artisan::call('route:clear');
        return response()->json(['status' => 'success', 'message' => 'Cache cleared successfully.']);
    }
    function index(){
        $header_menu = Menu::where('type', 'header_menu')->where('status', 0)->orderBy('order', 'asc')->get();
        $page = Page::where('id', 3)->first();
        return view('frontend.index', compact('page', 'header_menu'));
    }


    function ajax_get_program_by_institute(Request $request){
        $data = Program::where('institutes_id', $request->id)->get();
        return view('backend.partials.ajax_get_program_by_institute', compact('data'));

    }

    function ajax_get_state_by_country(Request $request){
        $data = State::where('country_id', $request->id)->get();
        return view('backend.partials.ajax_get_state_by_country', compact('data'));

    }
    function ajax_get_book_list_by_category(Request $request){
        if($request->id !=''){
            $data = LibraryBook::where('library_categories_id', $request->id)->where('status', 1)->get();
        }else{
            $data = LibraryBook::where('status', 1)->get();
        }
        
        return view('backend.partials.ajax_get_option_title', compact('data'));

    }
}
