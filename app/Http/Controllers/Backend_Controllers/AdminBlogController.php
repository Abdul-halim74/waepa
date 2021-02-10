<?php

namespace App\Http\Controllers\Backend_Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Blog;
use Auth;
class AdminBlogController extends Controller
{
   function bloginsert(Request $request){
   		// echo "<pre>";
   		// print_r($_POST);

   		$user_id = Auth::user()->id;

   		$title = $request->title;
   		$description = $request->description;

   		Blog::insert([
   			'blog_heading'=>$title,
   			'blog_content'=>$description,
   			'active_status'=>1,
   			'created_by'=>$user_id,

   		]);

   		return back()->with('status','New Blog Insertetd Successfully');

   		// $blog = new Blog();
   		// $blog->blog_heading = $title;
   		// $blog->blog_content = $description;
   		// $blog->active_status = 1;
   		// $blog->created_by = $user_id;
   		// $blog->save();

   		
   }

}
