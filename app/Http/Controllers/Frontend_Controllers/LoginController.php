<?php

namespace App\Http\Controllers\Frontend_Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Auth;
use Validator;

use Illuminate\Support\Facades\DB;


class LoginController extends Controller
{
    public function login(){
    	
    	return view('frontend.login');
    }

    public function login_submit(Request $request){


    	 // $email = $request->email;
    	 //  $password = $request->password;


    	  $this->validate($request, [
    	  	'email'=> 'required|email',
    	  	'password'=>'required|alphaNum|min:3'
    	  ]);


    	  $user_data = [
    	  	'email' => $request->get('email'),
    	  	'password' => $request->get('password')
    	  ];

    	  if (Auth::attempt($user_data)) {
    	  	return redirect('index');

    	  }else{

    	  	return back()->with('status','wrong Information' );
    	  }

  //   	$user_data =   DB::table('users')->where('email',$email)->first();

  //   	// echo "<pre>";
  //   	// print_r($user_data);die;

  //   	 $f_email = $user_data->email;
  //   	 $f_password = $user_data->password;
  //   	 $f_id = $user_data->id;

  //   	 // if ($email == $f_email) {
  //   	 // 	echo "your email is correct";
  //   	 // }else{
  //   	 // 	echo "your email is incorrect!!";
  //   	 // }


		//  if ($email == $f_email && Hash::check($password, $f_password)) {

		 	
		//  	return redirect()->route('/', ['id' => $f_id])->with('status','Login Successfully');
				


		// }else{
		// 	return view('frontend.login');
		// }



    }  //end login_submit


    public function successfull_login(){

          $member_register_data = DB::table('member_register')->select('member_register.id','member_register.name','member_register.email',
      'member_register.mobile','member_register.designation_from_waepa','member_register.position','member_register.user_img')->where('ec_member','Yes')->limit(4)->get();

          // echo "<pre>";
          // print_r($member_register_data);die;

    	// echo "string";die;
    	return view('frontend.index', compact('member_register_data'));
    }


    public function logout(){
    	Auth::logout();

    	return view('frontend.login');
    }
}
