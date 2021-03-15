<?php

namespace App\Http\Controllers\Frontend_Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;

use Illuminate\Support\Facades\DB;

class FrontendSingleMember extends Controller
{
    public function single_member_profile(Request $request){

    	$id = $request->id;

    	$single_member_data = DB::table('member_register')->where('id', $id)->first();
    	// echo "<pre>";
    	// print_r($single_member_data);die;
    	return view('frontend.single_member_profile', compact('single_member_data'));

    }
}
