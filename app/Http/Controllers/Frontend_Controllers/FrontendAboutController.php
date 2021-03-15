<?php

namespace App\Http\Controllers\Frontend_Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use Image;
use Illuminate\Support\Facades\DB;


class FrontendAboutController extends Controller
{
    public function about_us(){

    	$about_us_data = DB::table('about_us')->where('id',1)->first();
    	// echo "<pre>";
    	// print_r($about_us_data);die;

    	return view('frontend.about_us', compact('about_us_data'));
    }

    public function vission_mission(){

    	$vision_mission_data = DB::table('vision_mission')->where('id',1)->first();
    	// echo "<pre>";
    	// print_r($about_us_data);die;

    	return view('frontend.vision_mission', compact('vision_mission_data'));
    }

    public function aims_and_object(){

    	$aims_objective_data = DB::table('aims_objective')->where('id',1)->first();
    	// echo "<pre>";
    	// print_r($about_us_data);die;

    	return view('frontend.aims_objective', compact('aims_objective_data'));

    }

    public function programs_of_waepa(){

    	$programmes_waepa_data = DB::table('programmes_waepa')->where('id',1)->first();
    	// echo "<pre>";
    	// print_r($about_us_data);die;

    	return view('frontend.programmes_waepa', compact('programmes_waepa_data'));
    	
    }


}
