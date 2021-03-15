<?php

namespace App\Http\Controllers\Frontend_Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class WaepaTalkController extends Controller
{
    public function waepa(){

    	$data = DB::table('waepa_talk')->where('status',1)->orderBy('id','DESC')->get();
    	// echo "<pre>";
    	// print_r($data);die;
    	return view('frontend.digital_archive.waepatalk', compact('data'));
    }
}
