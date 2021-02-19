<?php

namespace App\Http\Controllers\Backend_Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use Image;
use Illuminate\Support\Facades\DB;



class AdminMemberController extends Controller
{
  	public function memberlist(){

  		$data = DB::table('member_register')->get();



  		return view('backend.member.index',compact('data'));
  		
  	}
}
