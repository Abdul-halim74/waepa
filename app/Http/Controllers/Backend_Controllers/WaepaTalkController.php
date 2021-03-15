<?php

namespace App\Http\Controllers\Backend_Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class WaepaTalkController extends Controller
{
    public function index(){
    	
    	return view('backend.waepatalk.index');
    }

     public function list(){

     	$data = DB::select(DB::raw("SELECT * FROM `waepa_talk` ORDER BY id DESC"));
    	
    	return view('backend.waepatalk.list', compact('data'));
    }

    public function create(Request $request){

    	 $title = $request->title;
    	 $link = $request->link;

    	 DB::table('waepa_talk')->insert([
    	 	'title'=>$title,
    	 	'video_link'=>$link
    	 ]);

    	 return back()->with('status', 'Data Inserted Successfully');
    }

    public function edit(Request $request){

    	$id = $request->id;
    	

     	$data = DB::select(DB::raw("SELECT * FROM `waepa_talk` where id ='$id' "))[0];
     	// echo "<pre>";
     	// print_r($data);die;
    	return view('backend.waepatalk.edit', compact('data'));
    }

    public function update_waepa_talk(Request $request){
    	  $id = $request->hidden_id;
    	  $title = $request->title;
    	  $link = $request->link;

    	  DB::table('waepa_talk')->where('id',$id)->update([
    	  	'title'=>$title,
    	  	'video_link'=>$link
    	  ]);

    	  return back()->with('status', 'Data Updated Successfully');
    }

    

     public function single_waepa_delete(Request $request){
    	 if ($request->ajax()) {
            try {
                $id =  $request->id;
                //$single_blog = Blog::find($row_id);
                $single_blog = DB::table('waepa_talk')->delete($id);

            } catch (\Exception $e) {
                echo $e->getMessage();
            }
        } else {
            echo 'This request is not ajax !';
        }
    }
}
