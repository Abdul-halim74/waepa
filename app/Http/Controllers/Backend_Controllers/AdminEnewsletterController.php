<?php

namespace App\Http\Controllers\Backend_Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use Image;
use Illuminate\Support\Facades\DB;


class AdminEnewsletterController extends Controller
{

	// public function __construct()
 //    {
 //        $this->middleware('auth');
 //    }


    // category function
    public function create_enewsletter_category(){

    	$data = DB::table('enews_letter_category')->get();

    	return view('backend.enews_letter.category', compact('data'));

    }

     public function edit_enewsletter_cat(Request $request){

     	$id = $request->id;

    	$data = DB::table('enews_letter_category')->where('id',$id)->first();

    	return view('backend.enews_letter.category_edit', compact('data'));

    }

    public function enewsletter_category_update(Request $request){
    	$id = $request->hidden_id;
    	$category_name = $request->category_name;

    	DB::table('enews_letter_category')->where('id',$id)->update([
    		"category_name"=>$category_name
    	]);

    	return back()->with('status', ' Data Updated Successfully! ');
    }

    public function create_enewsletter_category_action(Request $request){

    	 $category_name = $request->category_name;
    	$user_id =  Auth::user()->id;

    	 DB::table('enews_letter_category')->insert([

    	 	"category_name"=>$category_name,
    	 	"created_by"=>$user_id

    	 ]);

    	 return back()->with('status','Data Inserted Successfully ! ');

    }

   

      public function single_enewsletter_delete(Request $request){

    	 if ($request->ajax()) {
            try {
                $id =  $request->id;
                //$single_blog = Blog::find($row_id);
                $single_cat = DB::table('enews_letter_category')->delete($id);

            } catch (\Exception $e) {
                echo $e->getMessage();
            }
        } else {
            echo 'This request is not ajax !';
        }
    }


    // end category function


    public function create_enewsletter(Request $request){

    	$data = DB::table('enews_letter_category')->get();

    	return view('backend.enews_letter.index', compact('data'));
    }


    public function create_enewsletter_action(Request $request){

    	$newsletter_category = $request->newsletter_category;

    	$title = $request->title;
    	$excerpt = $request->excerpt;
    	$description = $request->description;

    	$user_id = Auth::user()->id;

    	$newsletter_category_emp = implode(',', $newsletter_category);

    	$last_inserted_id = DB::table('enewsletter')->insertGetId([

    		"heading"=>$title,
    		"excerpt"=>$excerpt,
    		"content"=>$description,
    		"created_by"=>$user_id,
    		"enewsletter_cat"=>$newsletter_category_emp,
    		

    	]);

    	//echo $last_inserted_data;die;

    	if ($request->hasFile('image')) {

   			$enewsletter_image_fullname = $request->image;
   			
   			$enewsletter_image_filename_extension = $enewsletter_image_fullname->getClientOriginalExtension();
   			

   			 $filename = $last_inserted_id.".".$enewsletter_image_filename_extension;

   			 //echo base_path('public/uploads/blog_image/'.$filename);

   			 Image::make($enewsletter_image_fullname)->resize(1024,768)->save(base_path('uploads/enewsletter_image/'.$filename));


   			 DB::table('enewsletter')->where('id',$last_inserted_id)->update([
   			 	"image"=>$filename
   			 ]);

   			
   		}


    	return back()->with('status','Data Inserted Successfully !');


    }

    public function enewsletter_list(){
    	
    	$data = DB::table('enewsletter')->orderBy('id','DESC')->get();

    	return view('backend.enews_letter.list', compact('data'));

    }

    public function single_enewsletter_show(Request $request)
    {
        if ($request->ajax()) {
            try {
                $row_id =  $request->row_id;
                //$single_blog = Blog::find($row_id);
               $single_enewsletter_show = DB::select(DB::raw("SELECT * FROM `enewsletter` WHERE id='$row_id' "))[0];

                $view = view('backend.enews_letter.single_enews_cat', compact('single_enewsletter_show'))->render();
                return response()->json(['html' => $view]);
            } catch (\Exception $e) {
                echo $e->getMessage();
            }
        } else {
            echo 'This request is not ajax !';
        }
    }


    public function enewsletter_edit($id){
    	$data_cat = DB::table('enews_letter_category')->get();
    	//echo $id;
    	$data = DB::table('enewsletter')->where('id', $id)->first();
    	// echo "<pre>";
    	// print_r($data);die;

    	return view('backend.enews_letter.enews_letter_edit', compact('data_cat','data'));

    }

    Public function enewsletter_update(Request $request){

    	$user_id = Auth::user()->id;
    	$id = $request->hidden_id;

    	$single_enewsletter_info = DB::table('enewsletter')->find($id);

    	$newsletter_category = $request->newsletter_category;
    	$title = $request->title;
    	$excerpt = $request->excerpt;
    	$description = $request->description;

    	 $newsletter_category_imp = implode(',', $newsletter_category);

    	DB::table('enewsletter')->where('id',$id)->update([
    		"heading"=>$title,
    		"excerpt"=>$excerpt,
    		"enewsletter_cat"=>$newsletter_category_imp,
    		"content"=>$description,
    		"updated_by"=>$user_id,
    	]);

    	if ($request->hasFile('image')) {



   			$enewsletter_image_fullname = $request->image;
   			
   			$enewsletter_image_filename_extension = $enewsletter_image_fullname->getClientOriginalExtension();
   			

   			 $filename = $id.".".$enewsletter_image_filename_extension;

   			 unlink(base_path('uploads/enewsletter_image/'.$single_enewsletter_info->image));

   			 //echo base_path('public/uploads/blog_image/'.$filename);

   			 Image::make($enewsletter_image_fullname)->resize(1024,768)->save(base_path('uploads/enewsletter_image/'.$filename));

   			DB::table('enewsletter')->where('id', $id)->update([
   				"image"=>$filename
   			]);

   		}


    	return back()->with('status','Data Updated Successfully !');
    }

   
    public function enewsletter_delete(Request $request){
    	 if ($request->ajax()) {
            try {
                $id =  $request->id;
                //$single_blog = Blog::find($row_id);
                $single_blog = DB::table('enewsletter')->delete($id);

            } catch (\Exception $e) {
                echo $e->getMessage();
            }
        } else {
            echo 'This request is not ajax !';
        }
    }


   

     public function seminar(Request $request){

      

        return view('backend.seminar.index');
    }

    public function create_seminar_action(Request $request){

        $title = $request->title;
        $excerpt = $request->excerpt;
        $description = $request->description;

        $user_id =  Auth::user()->id;

       $last_inserted_id = DB::table('seminar')->insertGetId([
            "heading"=>$title,
            "excerpt"=>$excerpt,
            "content"=>$description,
            "created_by"=>$user_id,
        ]);


        //echo $last_inserted_data;die;

        if ($request->hasFile('image')) {

            $enewsletter_image_fullname = $request->image;
            
            $enewsletter_image_filename_extension = $enewsletter_image_fullname->getClientOriginalExtension();
            

             $filename = $last_inserted_id.".".$enewsletter_image_filename_extension;

             //echo base_path('public/uploads/blog_image/'.$filename);

             Image::make($enewsletter_image_fullname)->resize(1024,768)->save(base_path('uploads/seminar/'.$filename));


             DB::table('seminar')->where('id',$last_inserted_id)->update([
                "image"=>$filename
             ]);

            
        }


        return back()->with('status','Data Inserted Successfully ! ');

    }

    public function seminar_list(){

          $seminar =  DB::table('seminar')->orderBy('id','DESC')->get();

          // echo "<pre>";
          // print_r($seminar);die;

          return view('backend.seminar.seminar_list', compact('seminar'));

    }

    public function single_seminar_show(Request $request){

        if ($request->ajax()) {
            try {
                $row_id =  $request->row_id;
                //$single_blog = Blog::find($row_id);
               $single_seminar_show = DB::select(DB::raw("SELECT * FROM `seminar` WHERE id='$row_id' "))[0];

                $view = view('backend.seminar.single_seminar', compact('single_seminar_show'))->render();
                return response()->json(['html' => $view]);
            } catch (\Exception $e) {
                echo $e->getMessage();
            }
        } else {
            echo 'This request is not ajax !';
        }

    }

    public function single_seminar_delete(Request $request){


         if ($request->ajax()) {
            try {
                $id =  $request->id;
                //$single_blog = Blog::find($row_id);
                $single_cat = DB::table('seminar')->delete($id);

            } catch (\Exception $e) {
                echo $e->getMessage();
            }
        } else {
            echo 'This request is not ajax !';
        }



    }

    public function seminar_edit($id){

      $data = DB::table('seminar')->where('id', $id)->first();
      // echo"<pre>";
      // print_r($data);die;

      return view('backend.seminar.edit_seminar', compact('data'));

    }

    public function seminar_update(Request $request){

        $id = $request->hidden_id;
        $title = $request->title;
        $excerpt = $request->excerpt;
        $description = $request->description;

            $single_enewsletter_info = DB::table('seminar')->find($id);

       // $single_enewsletter_info = DB::table('seminar')->where('id', $id)->first();

        $user_id =  Auth::user()->id;

       $last_inserted_id = DB::table('seminar')->where('id',$id)->update([
            "heading"=>$title,
            "excerpt"=>$excerpt,
            "content"=>$description,
            "created_by"=>$user_id,
        ]);

       if ($request->hasFile('image')) {



            $enewsletter_image_fullname = $request->image;
            
            $enewsletter_image_filename_extension = $enewsletter_image_fullname->getClientOriginalExtension();
            

             $filename = $id.".".$enewsletter_image_filename_extension;

             if($single_enewsletter_info->image!=''){

                unlink(base_path('uploads/seminar/'.$single_enewsletter_info->image));
             }

             

             //echo base_path('public/uploads/blog_image/'.$filename);

             Image::make($enewsletter_image_fullname)->resize(1024,768)->save(base_path('uploads/seminar/'.$filename));

            DB::table('seminar')->where('id', $id)->update([
                "image"=>$filename
            ]);

        }

        return back()->with('status','Data Updated Successfully');

    }

    public function frontend_seminar(){

        $enewsletter_data = DB::table('seminar')
            ->join('users', 'seminar.created_by', '=', 'users.id')
            ->select('seminar.*', 'users.name as username')->orderBy('id', 'DESC')->paginate(3);

          $recent_enewsletter_data = DB::table('seminar')->orderBy('id', 'DESC')->limit(3)->get();

          $all_categories =  DB::table('enews_letter_category')->get();


    // echo "string";die;
    // $enewsletter_data = DB::select(DB::raw("SELECT enewsletter.*,users.name as username FROM `enewsletter` LEFT JOIN users ON enewsletter.created_by = users.id"));


    

       return view('frontend.seminar.index', compact('enewsletter_data','recent_enewsletter_data', 'all_categories'));


    }

    public function frontend_seminar_details($id){
        
         $single_enewsletter_id = $id;

       $member_id = Auth::user()->member_id;

       $login_user_data = DB::table('member_register')->where('member_id',$member_id)->first();

     
       // $single_blog_comment = DB::select(DB::raw("SELECT fbc.id,fbc.user_id, mr.name as user_name, fbc.blog_id,fbc.user_comment, fbc.entry_date, mr.user_img FROM `frontend_blog_comments` fbc left join member_register mr on fbc.member_id = mr.member_id where fbc.blog_id ='$id' ORDER BY fbc.id ASC " ));

       $single_blog_comment = DB::table('seminar_comments')
                                ->join('member_register', 'seminar_comments.member_id', '=', 'member_register.member_id')

                                ->select('seminar_comments.*', 'member_register.name as user_name', 'member_register.user_img')
                                ->where('seminar_comments.blog_id', $id)
                                ->orderBy('seminar_comments.entry_date', 'desc')
                                ->paginate(4);

        

         $blog_details = DB::table('seminar')
            ->join('users', 'seminar.created_by', '=', 'users.id')
            ->select('seminar.*', 'users.name as username')->where('seminar.id', $single_enewsletter_id)
            ->first();

            // echo "<pre>";
            // print_r($blog_details);die;


        return view('frontend.seminar.details', compact('blog_details','login_user_data','single_blog_comment'));


    }


   

    public function general_meeting(Request $request){

      
        return view('backend.general_meeting.index');

    }


    public function create_general_meeting_action(Request $request){

       $title = $request->title;
        $excerpt = $request->excerpt;
        $description = $request->description;

        $user_id =  Auth::user()->id;


       $last_inserted_id = DB::table('general_meeting')->insertGetId([
            "heading"=>$title,
            "excerpt"=>$excerpt,
            "content"=>$description,
            "created_by"=>$user_id,
        ]);


        //echo $last_inserted_data;die;

        if ($request->hasFile('image')) {

            $enewsletter_image_fullname = $request->image;
            
            $enewsletter_image_filename_extension = $enewsletter_image_fullname->getClientOriginalExtension();
            

             $filename = $last_inserted_id.".".$enewsletter_image_filename_extension;

             //echo base_path('public/uploads/blog_image/'.$filename);

             Image::make($enewsletter_image_fullname)->resize(1024,768)->save(base_path('uploads/general_meeting/'.$filename));


             DB::table('general_meeting')->where('id',$last_inserted_id)->update([
                "image"=>$filename
             ]);

            
        }


        return back()->with('status','Data Inserted Successfully ! ');


    }

    public function general_meeting_list(){

       $data = DB::table('general_meeting')->orderBy('id','DESC')->get();

       return view('backend.general_meeting.list', compact('data'));
    }


     public function single_general_meeting_show(Request $request){

        if ($request->ajax()) {
            try {
                $row_id =  $request->row_id;
                //$single_blog = Blog::find($row_id);
               $single_seminar_show = DB::select(DB::raw("SELECT * FROM `general_meeting` WHERE id='$row_id' "))[0];

                $view = view('backend.general_meeting.single_general_meeting', compact('single_seminar_show'))->render();
                return response()->json(['html' => $view]);
            } catch (\Exception $e) {
                echo $e->getMessage();
            }
        } else {
            echo 'This request is not ajax !';
        }

    }


    public function general_meeting_edit($id){

        $data = DB::table('general_meeting')->where('id', $id)->first();
        // echo "<pre>";
        // print_r($data);die;

        return view('backend.general_meeting.edit', compact('data'));


    }

    public function general_meeting_update(Request $request){


        $id = $request->hidden_id;
        $title = $request->title;
        $excerpt = $request->excerpt;
        $description = $request->description;

            $single_enewsletter_info = DB::table('general_meeting')->find($id);

       // $single_enewsletter_info = DB::table('seminar')->where('id', $id)->first();

        $user_id =  Auth::user()->id;

       $last_inserted_id = DB::table('general_meeting')->where('id',$id)->update([
            "heading"=>$title,
            "excerpt"=>$excerpt,
            "content"=>$description,
            "created_by"=>$user_id,
        ]);

       if ($request->hasFile('image')) {



            $enewsletter_image_fullname = $request->image;
            
            $enewsletter_image_filename_extension = $enewsletter_image_fullname->getClientOriginalExtension();
            

             $filename = $id.".".$enewsletter_image_filename_extension;

             if($single_enewsletter_info->image!=''){

                unlink(base_path('uploads/general_meeting/'.$single_enewsletter_info->image));
             }

             

             //echo base_path('public/uploads/blog_image/'.$filename);

             Image::make($enewsletter_image_fullname)->resize(1024,768)->save(base_path('uploads/general_meeting/'.$filename));

            DB::table('general_meeting')->where('id', $id)->update([
                "image"=>$filename
            ]);

        }

        return back()->with('status','Data Updated Successfully');

    }


    public function single_general_meeting_delete(Request $request){

         if ($request->ajax()) {
            try {
                $id =  $request->id;
                //$single_blog = Blog::find($row_id);
                $single_cat = DB::table('general_meeting')->delete($id);

            } catch (\Exception $e) {
                echo $e->getMessage();
            }


        } else {
            echo 'This request is not ajax !';
        }

    }




     public function frontend_show_general_meeting(){

                $enewsletter_data = DB::table('general_meeting')
            ->join('users', 'general_meeting.created_by', '=', 'users.id')
            ->select('general_meeting.*', 'users.name as username')->orderBy('id', 'DESC')->paginate(3);

          $recent_enewsletter_data = DB::table('general_meeting')->orderBy('id', 'DESC')->limit(3)->get();

      
    // echo "string";die;
    // $enewsletter_data = DB::select(DB::raw("SELECT enewsletter.*,users.name as username FROM `enewsletter` LEFT JOIN users ON enewsletter.created_by = users.id"));


    

       return view('frontend.general_meeting.index', compact('enewsletter_data','recent_enewsletter_data'));

            
   
   }


   public function general_meeting_details($id){
        
         $single_enewsletter_id = $id;

       $member_id = Auth::user()->member_id;

       $login_user_data = DB::table('member_register')->where('member_id',$member_id)->first();

     
       // $single_blog_comment = DB::select(DB::raw("SELECT fbc.id,fbc.user_id, mr.name as user_name, fbc.blog_id,fbc.user_comment, fbc.entry_date, mr.user_img FROM `frontend_blog_comments` fbc left join member_register mr on fbc.member_id = mr.member_id where fbc.blog_id ='$id' ORDER BY fbc.id ASC " ));

       $single_blog_comment = DB::table('general_meeting_comments')
                                ->join('member_register', 'general_meeting_comments.member_id', '=', 'member_register.member_id')

                                ->select('general_meeting_comments.*', 'member_register.name as user_name', 'member_register.user_img')
                                ->where('general_meeting_comments.blog_id', $id)
                                ->orderBy('general_meeting_comments.entry_date', 'desc')
                                ->paginate(4);

        

         $blog_details = DB::table('general_meeting')
            ->join('users', 'general_meeting.created_by', '=', 'users.id')
            ->select('general_meeting.*', 'users.name as username')->where('general_meeting.id', $single_enewsletter_id)
            ->first();

            // echo "<pre>";
            // print_r($blog_details);die;


        return view('frontend.general_meeting.details', compact('blog_details','login_user_data','single_blog_comment'));


    }


    public function user_frontend_general_meeting_comment_submit(Request $request){

      $id = $request->hidden_id;
      $comments = $request->comments;

      $user_id = Auth::user()->id;
      $member_id = Auth::user()->member_id;

      DB::table('general_meeting_comments')->insert([
        "blog_id"=>$id,
        "user_id"=>$user_id,
        "member_id"=>$member_id,
        "user_comment"=>$comments,
      ]);


      return back()->with('status', 'Thanks for your comments !');



    }


    public function social_events(){

        return view('backend.social_events.index');
    }

    public function create_social_events_action(Request $request){

               $title = $request->title;
        $excerpt = $request->excerpt;
        $description = $request->description;

        $user_id =  Auth::user()->id;

       $last_inserted_id = DB::table('social_events')->insertGetId([
            "heading"=>$title,
            "excerpt"=>$excerpt,
            "content"=>$description,
            "created_by"=>$user_id,
        ]);


        //echo $last_inserted_data;die;

        if ($request->hasFile('image')) {

            $enewsletter_image_fullname = $request->image;
            
            $enewsletter_image_filename_extension = $enewsletter_image_fullname->getClientOriginalExtension();
            

             $filename = $last_inserted_id.".".$enewsletter_image_filename_extension;

             //echo base_path('public/uploads/blog_image/'.$filename);

             Image::make($enewsletter_image_fullname)->resize(1024,768)->save(base_path('uploads/social_events/'.$filename));


             DB::table('social_events')->where('id',$last_inserted_id)->update([
                "image"=>$filename
             ]);

            
        }


        return back()->with('status','Data Inserted Successfully ! ');


    }

    public function social_events_lists(){

      $data =  DB::table('social_events')->orderBy('id','DESC')->get();

          // echo "<pre>";
          // print_r($seminar);die;

          return view('backend.social_events.list', compact('data'));


    }

    public function single_social_events_show(Request $request){

          if ($request->ajax()) {
            try {
                $row_id =  $request->row_id;
                //$single_blog = Blog::find($row_id);
               $single_seminar_show = DB::select(DB::raw("SELECT * FROM `social_events` WHERE id='$row_id' "))[0];

                $view = view('backend.social_events.single_social_events', compact('single_seminar_show'))->render();
                return response()->json(['html' => $view]);

            } catch (\Exception $e) {
                echo $e->getMessage();
            }
        } else {
            echo 'This request is not ajax !';
        }

    }

    public function social_events_edit($id){

       $data = DB::table('social_events')->where('id', $id)->first();
        // echo "<pre>";
        // print_r($data);die;

        return view('backend.social_events.edit', compact('data'));


    }

    public function social_events_update(Request $request){

            $id = $request->hidden_id;
        $title = $request->title;
        $excerpt = $request->excerpt;
        $description = $request->description;

            $single_enewsletter_info = DB::table('social_events')->find($id);

       // $single_enewsletter_info = DB::table('seminar')->where('id', $id)->first();

        $user_id =  Auth::user()->id;

       $last_inserted_id = DB::table('social_events')->where('id',$id)->update([
            "heading"=>$title,
            "excerpt"=>$excerpt,
            "content"=>$description,
            "created_by"=>$user_id,
        ]);

       if ($request->hasFile('image')) {



            $enewsletter_image_fullname = $request->image;
            
            $enewsletter_image_filename_extension = $enewsletter_image_fullname->getClientOriginalExtension();
            

             $filename = $id.".".$enewsletter_image_filename_extension;

             if($single_enewsletter_info->image!=''){

                unlink(base_path('uploads/social_events/'.$single_enewsletter_info->image));
             }

             

             //echo base_path('public/uploads/blog_image/'.$filename);

             Image::make($enewsletter_image_fullname)->resize(1024,768)->save(base_path('uploads/social_events/'.$filename));

            DB::table('social_events')->where('id', $id)->update([
                "image"=>$filename
            ]);

        }

        return back()->with('status','Data Updated Successfully');

    }

      public function single_social_events_delete(Request $request){

         if ($request->ajax()) {
            try {
                $id =  $request->id;
                //$single_blog = Blog::find($row_id);
                $single_cat = DB::table('social_events')->delete($id);

            } catch (\Exception $e) {
                echo $e->getMessage();
            }


        } else {
            echo 'This request is not ajax !';
        }

    }

    public function frontend_social_events(){


                $enewsletter_data = DB::table('social_events')
            ->join('users', 'social_events.created_by', '=', 'users.id')
            ->select('social_events.*', 'users.name as username')->orderBy('id', 'DESC')->paginate(3);

          $recent_enewsletter_data = DB::table('social_events')->orderBy('id', 'DESC')->limit(3)->get();

      
    // echo "string";die;
    // $enewsletter_data = DB::select(DB::raw("SELECT enewsletter.*,users.name as username FROM `enewsletter` LEFT JOIN users ON enewsletter.created_by = users.id"));


    

       return view('frontend.social_events.index', compact('enewsletter_data','recent_enewsletter_data'));

    }


    public function social_events_details($id){

           $single_enewsletter_id = $id;

       $member_id = Auth::user()->member_id;

       $login_user_data = DB::table('member_register')->where('member_id',$member_id)->first();

     
       // $single_blog_comment = DB::select(DB::raw("SELECT fbc.id,fbc.user_id, mr.name as user_name, fbc.blog_id,fbc.user_comment, fbc.entry_date, mr.user_img FROM `frontend_blog_comments` fbc left join member_register mr on fbc.member_id = mr.member_id where fbc.blog_id ='$id' ORDER BY fbc.id ASC " ));

       $single_blog_comment = DB::table('social_events-comments')
                                ->join('member_register', 'social_events-comments.member_id', '=', 'member_register.member_id')

                                ->select('social_events-comments.*', 'member_register.name as user_name', 'member_register.user_img')
                                ->where('social_events-comments.blog_id', $id)
                                ->orderBy('social_events-comments.entry_date', 'desc')
                                ->paginate(4);

        

         $blog_details = DB::table('social_events')
            ->join('users', 'social_events.created_by', '=', 'users.id')
            ->select('social_events.*', 'users.name as username')->where('social_events.id', $single_enewsletter_id)
            ->first();

            // echo "<pre>";
            // print_r($blog_details);die;


        return view('frontend.social_events.details', compact('blog_details','login_user_data','single_blog_comment'));
    }



    public function user_frontend_social_events_submit(Request $request){

         $id = $request->hidden_id;
      $comments = $request->comments;

      $user_id = Auth::user()->id;
      $member_id = Auth::user()->member_id;

      DB::table('social_events-comments')->insert([
        "blog_id"=>$id,
        "user_id"=>$user_id,
        "member_id"=>$member_id,
        "user_comment"=>$comments,
      ]);


      return back()->with('status', 'Thanks for your comments !');
      
    }



}
