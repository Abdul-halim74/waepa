<?php

namespace App\Http\Controllers\Frontend_Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
    	
    	return view('frontend.login');
    }
}
