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
            ->select('blogs.*', 'users.name as username')->orderBy('id', 'DESC')->paginate(3);

          $recent_blogs = DB::table('blogs')->orderBy('id', 'DESC')->limit(3)->get();

          $all_blog_categories =  DB::table('blog_categories')->get();



    	return view('frontend.blog', compact('all_blog_info', 'all_blog_categories', 'recent_blogs'));


    }


    public function blogdetails($id){
    	
    	$single_blog_id = $id;

       $member_id = Auth::user()->member_id;

       $login_user_data = DB::table('member_register')->where('member_id',$member_id)->first();

     
       // $single_blog_comment = DB::select(DB::raw("SELECT fbc.id,fbc.user_id, mr.name as user_name, fbc.blog_id,fbc.user_comment, fbc.entry_date, mr.user_img FROM `frontend_blog_comments` fbc left join member_register mr on fbc.member_id = mr.member_id where fbc.blog_id ='$id' ORDER BY fbc.id ASC " ));

       $single_blog_comment = DB::table('frontend_blog_comments')
                                ->join('member_register', 'frontend_blog_comments.member_id', '=', 'member_register.member_id')
                                ->select('frontend_blog_comments.*', 'member_register.name as user_name', 'member_register.user_img')
                                ->where('frontend_blog_comments.blog_id', $id)
                                ->orderBy('frontend_blog_comments.entry_date', 'desc')
                                ->paginate(4);

  

    	 $blog_details = DB::table('blogs')
            ->join('users', 'blogs.created_by', '=', 'users.id')
            ->select('blogs.*', 'users.name as username')->where('blogs.id', $single_blog_id)
            ->first();


    	return view('frontend.blogdetails', compact('blog_details','login_user_data','single_blog_comment'));


    }

    public function insert_blog(Request $request){

         $blog_id = $request->hidden_id;

         $comments = $request->comments;

       $user_id = Auth::user()->id;
       $member_id = Auth::user()->member_id;
      

      DB::table('frontend_blog_comments')->insert([
            'blog_id'=>$blog_id,

            'user_id'=>$user_id,
            'user_comment'=>$comments,
            'member_id'=>$member_id
       ]);

      return back()->with('status', 'Your Comments Successfully Inserted ');
    }


}
