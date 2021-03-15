<?php

namespace App\Http\Controllers\Backend_Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Blog;
use Auth;
use Image;
use Illuminate\Support\Facades\DB;

class AdminBlogController extends Controller
{
  public function __construct()
    {
        $this->middleware('auth');
    }

    
	function create_blog(Request $request){

		$all_blog_cat = DB::table('blog_categories')->get();

		return view('backend.blog.create_blog', compact('all_blog_cat'));
	}

	function blogcategoryinsert(Request $request){

			 $category_name = $request->category_name;
			 $user_id = Auth::user()->id;

			 DB::table('blog_categories')->insert([

   			'category_name'=>$category_name,
   			'created_by'=>$user_id
   			
   		]);

			


		return back()->with('status','New Category Insertetd Successfully');
	}

	function blogcategoryshow(Request $request){

		$all_category_info = DB::table('blog_categories')
            ->join('users', 'blog_categories.created_by', '=', 'users.id')
            ->select('blog_categories.*', 'users.name as username')->get();

		return view('backend.blog.create_blog_category', compact('all_category_info'));
	}


   function bloginsert(Request $request){
   		// echo "<pre>";
   		// print_r($_POST);die;

   		 $blog_category = $request->blog_category;

   		 $blog_cat_implode = implode(',', $blog_category);

   	
   		$user_id = Auth::user()->id;

   		$title = $request->title;
   		$description = $request->description;
      $excerpt = $request->excerpt;

   		$last_inserted_id = Blog::insertGetId([
   			'blog_heading'=>$title,
   			'blog_content'=>$description,
   			'active_status'=>1,
   			'created_by'=>$user_id,
   			'blog_categories'=>$blog_cat_implode,
        'excerpt_text'=>$excerpt

   		]);

   		//echo $last_inserted_id;

   		if ($request->hasFile('blog_image')) {

   			$blog_image_fullname = $request->blog_image;
   			
   			$blog_image_filename_extension = $blog_image_fullname->getClientOriginalExtension();
   			

   			 $filename = $last_inserted_id.".".$blog_image_filename_extension;

   			 //echo base_path('public/uploads/blog_image/'.$filename);

   			 Image::make($blog_image_fullname)->resize(1024,768)->save(base_path('uploads/blog_image/'.$filename));

   			 Blog::find($last_inserted_id)->update([
   			 	'blog_image'=>$filename
   			 ]);

   		}

   		return back()->with('status','New Blog Insertetd Successfully');

   		// $blog = new Blog();
   		// $blog->blog_heading = $title;
   		// $blog->blog_content = $description;
   		// $blog->active_status = 1;
   		// $blog->created_by = $user_id;
   		// $blog->save();

   		
   }


   /*function blogshow(){
   
   $all_blog_info = DB::table('blogs')->orderBy('id', 'desc')->get();
 		

 		$data = [
 			"all_blog_info" => $all_blog_info,
 			"helllo" => $all_blog_info,

 		] ;

 		//return $data;

   	return view('backend.blog.bloglist', $data);
   }*/

   function blogshow(){
   
   $all_blog_info = DB::table('blogs')->orderBy('id', 'desc')->get();
 		

 		
 		
return view('backend.blog.bloglist', compact('all_blog_info'));
 		//return $data;

   	
   }

   public function single_blog_show(Request $request)
    {
        if ($request->ajax()) {
            try {
                $row_id =  $request->row_id;
                //$single_blog = Blog::find($row_id);
                $single_blog = DB::table('blogs')
            ->join('users', 'blogs.created_by', '=', 'users.id')
            ->select('blogs.*', 'users.name as username')
            ->where('blogs.id', $row_id)
            ->first();

                $view = view('backend.blog.single_blog', compact('single_blog'))->render();
                return response()->json(['html' => $view]);
            } catch (\Exception $e) {
                echo $e->getMessage();
            }
        } else {
            echo 'This request is not ajax !';
        }
    }


    public function single_blog_edit(Request $request){
    	$id = $request->id;

    	$single_post_info = DB::table('blogs')->find($id);

    	$all_categories = DB::table('blog_categories')->get();
    	// echo "<pre>";
    	// print_r($all_categories);die; = $blog_categories;

      $blog_categories = $single_post_info->blog_categories;
      $blog_categories = explode(",", $blog_categories);

      

      $data = [
        "all_categories" => $all_categories,
        "single_post_info" => $single_post_info,
        "blog_categories" => $blog_categories,
      ];


    	return view('backend.blog.edit_blog', $data);

    }


    public function single_blog_update(Request $request){


    	

    	$id =  $request->hidden_id;

    	$single_post_info = DB::table('blogs')->find($id);

    	$edit_title =  $request->edit_title;
       $blog_category =  $request->blog_category;
       $exceprt =  $request->exceprt;

       $blog_category_emp = implode(',', $blog_category);

    	$edit_description =  $request->edit_description;

    	$user_id = Auth::user()->id;

    	DB::table('blogs')->where('id',$id)->update([
    		'blog_heading' => $edit_title,
        'blog_categories' => $blog_category_emp,
    		'blog_content' => $edit_description,
    		'updated_by'=> $user_id,
    		'updated_at' => date('Y-m-d H:i:s'),
        'excerpt_text'=>$exceprt
    	]);

    	if ($request->hasFile('edit_blog_image')) {



   			$blog_image_fullname = $request->edit_blog_image;
   			
   			$blog_image_filename_extension = $blog_image_fullname->getClientOriginalExtension();
   			

   			 $filename = $id.".".$blog_image_filename_extension;

   			 unlink(base_path('uploads/blog_image/'.$single_post_info->blog_image));

   			 //echo base_path('public/uploads/blog_image/'.$filename);

   			 Image::make($blog_image_fullname)->resize(1024,768)->save(base_path('uploads/blog_image/'.$filename));

   			 Blog::find($id)->update([
   			 	'blog_image'=>$filename
   			 ]);

   		}

    	return back()->with('status','Data Updated Successfully !!!');



    }

    public function single_blog_delete(Request $request){
    	 if ($request->ajax()) {
            try {
                $id =  $request->id;
                //$single_blog = Blog::find($row_id);
                $single_blog = DB::table('blogs')->delete($id);

            } catch (\Exception $e) {
                echo $e->getMessage();
            }
        } else {
            echo 'This request is not ajax !';
        }
    }



}


