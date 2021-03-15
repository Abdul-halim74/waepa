<?php

namespace App\Http\Controllers\Backend_Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;



class ConstitutionControllerler extends Controller
{
    public function index(){

    	$data = DB::table('constitution')->where('id',1)->first();

    	return view('backend.constitution', compact('data'));
    }

    public function front_cost(){

    	$data = DB::table('constitution')->where('id',1)->first();
    	// echo "<pre>";
    	// print_r($data);die;
    	return view('frontend.constitution', compact('data'));
    }

    public function constitution_submit(Request $request){

    	$description = $request->description;

    	DB::table('constitution')->where('id',1)->update([
    		"description"=>$description
    	]);


    	return back()->with('status', 'Data Updated successfully!');


    }
}
