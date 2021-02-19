<?php

namespace App\Http\Controllers\Frontend_Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\memberModel;

use Auth;

use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
	public function insert(Request $request){

		$name = $request->name;
		$email = $request->email;
		$subject = $request->subject;
		$message = $request->message;

		DB::table('contacts')->insert([
			'name'=>$name,
			'email'=>$email,
			'subject'=>$subject,
			'message'=>$message
		]);

		return back()->with('status','Data Inserted Successfully !');
	}	

}
