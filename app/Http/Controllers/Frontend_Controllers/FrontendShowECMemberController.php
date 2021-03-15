<?php

namespace App\Http\Controllers\Frontend_Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

use Illuminate\Support\Facades\DB;

class FrontendShowECMemberController extends Controller
{
 	public function show_ec_member(){

 		$member_register_data = DB::select(DB::raw("SELECT *, mr.id as member_user_id FROM `member_register` mr left join users usr on mr.member_id = usr.member_id where usr.status='1' and mr.ec_member='Yes' ORDER BY mr.id desc limit 50"));

 		// echo "<pre>";
 		// print_r($member_register_data);die;

 		  return view('frontend.show_ec_member', compact('member_register_data'));

 	}  

 	public function show_former_ec_member(){


 		$member_register_data = DB::select(DB::raw("SELECT * FROM `member_register` mr left join users usr on mr.member_id = usr.member_id where usr.status='0' and mr.ec_member='Yes'"));


 	     // return view('frontend.show_life_member', compact('member_register_data'));

 	       return view('frontend.show_former_ec_member', compact('member_register_data'));
 	       
 	}   

 	

 	public function  show_life_member(){

 		$member_register_data = DB::select(DB::raw("SELECT * FROM `member_register` WHERE member_cat LIKE '%life%'"));


 	      return view('frontend.show_life_member', compact('member_register_data'));


 	}   

 		public function  show_general_member(){

 			$member_register_data = DB::select(DB::raw("SELECT * FROM `member_register` WHERE member_cat LIKE '%General%'"));


 	     // return view('frontend.show_life_member', compact('member_register_data'));

 	       return view('frontend.show_general_member', compact('member_register_data'));


 	}   

 	public function  show_honourable_member(){

 			$member_register_data = DB::select(DB::raw("SELECT * FROM `member_register` WHERE member_cat LIKE '%Honourable%'"));


 	     // return view('frontend.show_life_member', compact('member_register_data'));

 	       return view('frontend.show_honourable_member', compact('member_register_data'));


 	}



}
