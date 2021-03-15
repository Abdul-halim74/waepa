<?php

namespace App\Http\Controllers\Frontend_Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use Auth;
use Validator;

use Illuminate\Support\Facades\DB;


class FrontendViewController extends Controller
{
   public function view(){

   		 $member_register_data = DB::table('member_register')->select('member_register.id','member_register.name','member_register.email',
      'member_register.mobile','member_register.designation_from_waepa','member_register.position','member_register.user_img')->where('ec_member','Yes')->limit(4)->get();

   		 return view('frontend.index', compact('member_register_data'));

   }
}
