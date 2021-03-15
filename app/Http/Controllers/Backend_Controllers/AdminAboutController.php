<?php

namespace App\Http\Controllers\Backend_Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use Image;
use Illuminate\Support\Facades\DB;


class AdminAboutController extends Controller
{
   public function about_us(){

  	$about_us_data = DB::table('about_us')->where('id',1)->first();



   		return view('backend.about.about_us', compact('about_us_data'));

   } 

   public function vision_mission(){

  		$vision_mission_data = DB::table('vision_mission')->where('id',1)->first();



   		return view('backend.about.vision_mission', compact('vision_mission_data'));

   }

   public function aims_object(){

  		 $aims_objective_data = DB::table('aims_objective')->where('id',1)->first();
  		 
   		 return view('backend.about.aims_objective', compact('aims_objective_data'));
   }


   public function programs_of_waepa(){
   		
   		 $programmes_waepa_data = DB::table('programmes_waepa')->where('id',1)->first();
  		 
   		 return view('backend.about.programmes_waepa', compact('programmes_waepa_data'));

   }


   public function aims_obj_submit(Request $request){

   		 $description = $request->description;

   		  $user_id = Auth::user()->id;

   		 DB::table('aims_objective')->update([

   		 	'description'=>$description,
   		 	'created_by'=>$user_id

   		 ]);

   		 return back()->with('status','Data Updated Sunccessfully ');
   }

    public function programs_waepa_submit(Request $request){

   		 $description = $request->description;

   		  $user_id = Auth::user()->id;

   		 DB::table('programmes_waepa')->update([

   		 	'description'=>$description,
   		 	'created_by'=>$user_id

   		 ]);

   		 return back()->with('status','Data Updated Sunccessfully ');
   }

   public function vision_mission_submit(Request $request){

   		$vision = $request->vision;
   		$mission = $request->mission;

   		 $user_id = Auth::user()->id;

   		$vision_mission_data = DB::table('vision_mission')->update([
   			'vision'=>$vision,
   			'mission'=>$mission,
   			'created_by'=>$user_id

   		]);

   		return back()->with('status','Data Updated Sunccessfully ');
   		

   }


   public function about_us_submit(Request $request){

   		 $description = $request->description;
   		 $user_id = Auth::user()->id;

   		 DB::table('about_us')->update([

   		 	'description'=> $description,
   		 	'created_by'=>$user_id
   		 ]);

   		 return back()->with('status','Data Updated Sunccessfully ');
   }
}
