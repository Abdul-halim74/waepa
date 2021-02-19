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
            ->select('blogs.*', 'users.name as username')->orderBy('id', 'DESC')->paginate(2);

          $recent_blogs = DB::table('blogs')->limit(2)->get();

          $all_blog_categories =  DB::table('blog_categories')->get();

        

    	return view('frontend.blog', compact('all_blog_info', 'all_blog_categories', 'recent_blogs'));


    }


    public function blogdetails($id){
    	
    	$single_blog_id = $id;

    	 $blog_details = DB::table('blogs')
            ->join('users', 'blogs.created_by', '=', 'users.id')
            ->select('blogs.*', 'users.name as username')->where('blogs.id', $single_blog_id)
            ->first();


    	return view('frontend.blogdetails', compact('blog_details'));
    }


}
