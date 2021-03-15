<?php

namespace App\Http\Controllers\Backend_Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminLoginController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function adminlogin(Request $request){

    	$member_reg_total = DB::table('member_register')->get();

    	$total_member=DB::table('users')->where('status',1)->get();
    	
    	$publications=DB::table('blogs')->get();

    	$enewsletter=DB::table('enewsletter')->get();


    	$total_life_member = DB::select(DB::raw("SELECT count(member_register.member_id) as member_count FROM `users` left join member_register on users.member_id = member_register.member_id WHERE member_register.member_cat like '%Life%' and users.status=1 "))[0];

    	$total_general_member = DB::select(DB::raw("SELECT count(member_register.member_id) as member_count FROM `users` left join member_register on users.member_id = member_register.member_id WHERE member_register.member_cat like '%General%' and users.status=1"))[0];


    	$total_collection = DB::select(DB::raw("SELECT sum(payment) as total_payment FROM `member_register` "))[0];

    	// echo "<pre>";
    	// print_r($total_life_member);die;

    	$ec_member = DB::table('users')->
    	leftJoin('member_register','users.member_id','=','member_register.member_id')
    	->select('users.*','member_register.*')
    	->where('member_register.ec_member','Yes')->get();

    	// echo "<pre>";
    	// print_r($ec_member);die;

    	return view('backend.index',compact('member_reg_total', 'total_member','ec_member','total_life_member',
    		'total_general_member', 'total_collection', 'publications','enewsletter'));
    }
}
