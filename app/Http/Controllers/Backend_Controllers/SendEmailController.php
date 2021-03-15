<?php

namespace App\Http\Controllers\Backend_Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
   public function send(Request $request){

   		$email= $request->email;

   	$data=[
   		'subject'=>$request->subject,
   		'description'=>$request->description,
   	];

   	Mail::to($email)->send(new SendMail($data));

   	return back()->with('status','Email Already Send');
   }
}
