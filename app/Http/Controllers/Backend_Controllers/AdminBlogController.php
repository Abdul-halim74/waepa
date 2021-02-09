<?php

namespace App\Http\Controllers\Backend_Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Blog;

class AdminBlogController extends Controller
{
   function bloginsert(Request $request){
   		// echo "<pre>";
   		// print_r($_POST);

   		$title = $request->title;
   		$description = $request->description;

   		Blog::insert([
   			'blog_heading'=>$title,
   			'blog_content'=>$description,
   			'active_status'=>1
   		]);

   		echo "done";
   }

}
