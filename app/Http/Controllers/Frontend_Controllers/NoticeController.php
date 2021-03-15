<?php

namespace App\Http\Controllers\Frontend_Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Blog;
use Auth;
use Image;
use Illuminate\Support\Facades\DB;

class NoticeController extends Controller
{
    public function index(){

    	 $notices =DB::select(DB::raw("SELECT * FROM `notice` where status=1 ORDER BY id DESC"));
    	 
    	 return view('frontend.notice', compact('notices'));
    }
}
