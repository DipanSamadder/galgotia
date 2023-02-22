<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use App\Models\Menu;
use App\Models\Page;
use App\Models\User;
use App\Models\Institute;
use App\Models\Program;
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
        
        return redirect()->route('backend.admin');
    }


    function ajax_get_program_by_institute(Request $request){
        $data = Program::where('institutes_id', $request->id)->get();
        return view('backend.partials.ajax_get_program_by_institute', compact('data'));

    }
}
