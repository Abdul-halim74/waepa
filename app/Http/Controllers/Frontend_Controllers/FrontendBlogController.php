<?php

namespace App\Http\Controllers\Frontend_Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\DB;
use Auth;

class FrontendBlogController extends Controller
{
    public function showblog(){

    	 $all_blog_info = DB::table('blogs')
            ->join('users', 'blogs.created_by', '=', 'users.id')
            ->select('blogs.*', 'users.name as username')->orderBy('id', 'DESC')->get();

    	return view('frontend.blog', compact('all_blog_info'));
    }
}
