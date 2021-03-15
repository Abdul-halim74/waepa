<?php

namespace App\Http\Controllers\Backend_Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use Image;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class GallaryControllerler extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }


   public function index(){

   		return view('backend.gallary.create');

   }

   public function create_a_gallary_submit(Request $request){

   		$title = $request->title;
   		 $content = $request->content;
   		 $user_id = Auth::user()->id;

   		$last_inserted_id = DB::table('gallary')->insertGetId([
   			"title"=>$title,
   			"content"=>$content,
   			"created_by"=>$user_id,
   		]);

   		//echo $last_inserted_id;die;

   		if ($request->hasFile('gallary_img')) {

   			$gallary_image_fullname = $request->gallary_img;
   			
   			$gallary_image_filename_extension = $gallary_image_fullname->getClientOriginalExtension();
   			

   			 $filename = $last_inserted_id.".".$gallary_image_filename_extension;

   			 //echo base_path('public/uploads/blog_image/'.$filename);

   			 Image::make($gallary_image_fullname)->resize(1081,600)->save(base_path('uploads/gallary/'.$filename));

   			 DB::table('gallary')->where('id',$last_inserted_id)->update([

   			 	'img'=>$filename
   			 ]);

   			 
   		}


   		return back()->with('status','Data Inserted Successfully!');
   }

   public function list(){

   		$data = DB::table('gallary')->get();

   		return view('backend.gallary.list', compact('data'));
   }

   public function edit(Request $request){

  	 $id = $request->id;
  	 $data = DB::table('gallary')->where('id',$id)->first();
  	 // echo"<pre>";
  	 // print_r($data);die;

  	 return view('backend.gallary.edit', compact('data'));
   }


   public function update_gallary(Request $request){

   		$id = $request->hidden_id;
   		$single_data = DB::table('gallary')->find($id);

   		$title = $request->title;
   		$content = $request->content;


   		DB::table('gallary')->where('id',$id)->update([
   			'title'=>$title,
   			'content'=>$content,
   		]);

   		if ($request->hasFile('gallary_img')) {

   			$gallary_image_fullname = $request->gallary_img;
   			
   			$gallary_image_filename_extension = $gallary_image_fullname->getClientOriginalExtension();
   			

   			 $filename = $id.".".$gallary_image_filename_extension;

   			  unlink(base_path('uploads/gallary/'.$single_data->img));

   			 //echo base_path('public/uploads/blog_image/'.$filename);

   			 Image::make($gallary_image_fullname)->resize(1081,600)->save(base_path('uploads/gallary/'.$filename));

   			 DB::table('gallary')->where('id',$id)->update([

   			 	'img'=>$filename
   			 ]);

   			 
   		}


   		return back()->with('status','Data Updated Successfully');

   }


    public function single_gallary_delete(Request $request){
    	 if ($request->ajax()) {
            try {
                $id =  $request->id;
                //$single_blog = Blog::find($row_id);
                $single_blog = DB::table('gallary')->delete($id);

            } catch (\Exception $e) {
                echo $e->getMessage();
            }
        } else {
            echo 'This request is not ajax !';
        }
    }


  


}
