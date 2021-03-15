<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class Frontend_Controllers extends Controller
{
   public function gallary(){

   		$data = DB::table('gallary')->get();

   		 return view('frontend.digital_archive.waepagallary', compact('data'));
   }

   public function enewsletter(){

   	 $enewsletter_data = DB::table('enewsletter')
            ->join('users', 'enewsletter.created_by', '=', 'users.id')
            ->select('enewsletter.*', 'users.name as username')->orderBy('id', 'DESC')->paginate(3);

          $recent_enewsletter_data = DB::table('enewsletter')->orderBy('id', 'DESC')->limit(3)->get();

          $all_categories =  DB::table('enews_letter_category')->get();


   	// echo "string";die;
   	// $enewsletter_data = DB::select(DB::raw("SELECT enewsletter.*,users.name as username FROM `enewsletter` LEFT JOIN users ON enewsletter.created_by = users.id"));


   	return view('frontend.enewsletter.index', compact('enewsletter_data','recent_enewsletter_data', 'all_categories'));
   }


    public function enewsletter_details($id){
    	
    	 $single_enewsletter_id = $id;

       $member_id = Auth::user()->member_id;

       $login_user_data = DB::table('member_register')->where('member_id',$member_id)->first();

     
       // $single_blog_comment = DB::select(DB::raw("SELECT fbc.id,fbc.user_id, mr.name as user_name, fbc.blog_id,fbc.user_comment, fbc.entry_date, mr.user_img FROM `frontend_blog_comments` fbc left join member_register mr on fbc.member_id = mr.member_id where fbc.blog_id ='$id' ORDER BY fbc.id ASC " ));

       $single_blog_comment = DB::table('enewsletter_comments')
                                ->join('member_register', 'enewsletter_comments.member_id', '=', 'member_register.member_id')

                                ->select('enewsletter_comments.*', 'member_register.name as user_name', 'member_register.user_img')
                                ->where('enewsletter_comments.blog_id', $id)
                                ->orderBy('enewsletter_comments.entry_date', 'desc')
                                ->paginate(4);

  		

    	 $blog_details = DB::table('enewsletter')
            ->join('users', 'enewsletter.created_by', '=', 'users.id')
            ->select('enewsletter.*', 'users.name as username')->where('enewsletter.id', $single_enewsletter_id)
            ->first();

            // echo "<pre>";
            // print_r($blog_details);die;

    	return view('frontend.enewsletter.details', compact('blog_details','login_user_data','single_blog_comment'));


    }


   public function user_frontend_enewsletter_comment_submit(Request $request){

   		$id = $request->hidden_id;
   		$comments = $request->comments;

   		$user_id = Auth::user()->id;
   		$member_id = Auth::user()->member_id;

   		DB::table('enewsletter_comments')->insert([
   			"blog_id"=>$id,
   			"user_id"=>$user_id,
   			"member_id"=>$member_id,
   			"user_comment"=>$comments,
   		]);
   		return back()->with('status', 'Thanks for your comments !');
   } 


   public function user_frontend_seminar_comment_submit(Request $request){

      $id = $request->hidden_id;
      $comments = $request->comments;

      $user_id = Auth::user()->id;
      $member_id = Auth::user()->member_id;

      DB::table('seminar_comments')->insert([
        "blog_id"=>$id,
        "user_id"=>$user_id,
        "member_id"=>$member_id,
        "user_comment"=>$comments,
      ]);
      return back()->with('status', 'Thanks for your comments !');
   }


   //general Meeting





}
