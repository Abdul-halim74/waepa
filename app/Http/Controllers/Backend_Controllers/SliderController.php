<?php

namespace App\Http\Controllers\Backend_Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
Use Auth;
use Image;

class SliderController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
    	$data =DB::table('slider')->orderBy('id', 'desc')->get();
    	return view('backend.slider.index', compact('data'));
    }
    public function create()
    {
    	return view('backend.slider.create');
    }

    public function store(Request $request)
    {
    	
    	$request->validate([
    		'name'=> 'required',
    		'img'=> 'required|image',

    	],[
    		'name.required' => 'Pleas give slider name',
    		'img.required' => 'Pleas give slider Image',
    		'img.mimes' => 'Pleas give jpg , png or jpeg image for slider',

    	]);
    	$today = date('Y-m-d');
    	$create_by = Auth::user()->member_id;
    	

    	if($request->hasFile('img'))
    	{

    			 $extentsion = $request->img->getClientOriginalExtension();
    			 date_default_timezone_set("Asia/Dhaka");
    			 $currentTime = date('his_').".";
    			 $file = $request->img->getClientOriginalName();
    			 $file_array=explode('.', $file);
    			 $file_name = $file_array[0].$currentTime.$extentsion;

    			 if(!file_exists('uploads/slider'))
    			 {
    			 	mkdir('uploads/slider');
    			 }

    			 $path = "uploads/slider/";
    			 $file_path = $path.$file_name;

    			 $save_img = Image::make($request->img)->resize(1500,700)->save(base_path($file_path));
    			 if($save_img)
    			 {

    			 	 $insert = DB::table('slider')->insert([
				     	'name'=> $request->name,
				    	'title'=> $request->title,
				    	'img' => $file_path,
				    	
				    	'create_by' => $create_by,
				    	'create_date' => $today,
                        'link' => $request->link,


				     ]);

				     if($insert)
				     {
				     	return redirect()->route('slider.index')->with('success', 'Slider store successfully');
				     }else{
				     	return redirect()->route('slider.index')->with('error', 'Slider store not successful');
				     }

    			 }

    	}	

    }

    public function edit($id)
    {
    	$data =DB::table('slider')->where('id', $id)->first();
    	return view('backend.slider.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {

    	$request->validate([
    		'name'=> 'required',
    		
    	],[
    		'name.required' => 'Pleas give slider name',
    		
    	]);

    	$data =DB::table('slider')->where('id', $id)->first();
    	$img =  $data->img;


    	
    	if($request->hasFile('img'))
    	{
    		     $extentsion = $request->img->getClientOriginalExtension();
    			 date_default_timezone_set("Asia/Dhaka");
    			 $currentTime = date('his_').".";
    			 $file = $request->img->getClientOriginalName();
    			 $file_array=explode('.', $file);
    			 $file_name = $file_array[0].$currentTime.$extentsion;
    			 $path = "uploads/slider/";
    			 $file_path = $path.$file_name;
    			 $save_img = Image::make($request->img)->save(base_path($file_path));

    			 if(file_exists($img))
    			 {
    			 	\File::delete($img);
    			 }

    			 $img = $file_path;

    	}

    	$update = DB::table('slider')->where('id', $id)->update([
    		'name' => $request->name,
    		'title' => $request->title,
    		'img' => $img,
            'link'=> $request->link,

    	]);

    	if($update)
    	{
    		return redirect()->route('slider.index')->with('success', 'slider information updated');
    	}else{
     		return redirect()->route('slider.index')->with('error', 'Slider information not  updated yet ');
     	}
    }

     public function active($id)
	    {
	        DB::table('slider')->where('id', $id)->update([
	            'status' => 1,

	        ]);

	        return redirect()->back()->with('success', 'This Slider is live now');
	    }


     public function inactive($id)
	    {
	        DB::table('slider')->where('id', $id)->update([
	            'status' => 0,

	        ]);

	        return redirect()->back()->with('success', 'This Slider is disable ');
	    }

    public function delete(Request $request)
    {
    	$id = $request->id;
    	$data=DB::table('slider')->select('id', 'img')->where('id', $id)->first();
         if(File_exists($data->img))
         {
            \File::delete($data->img);
            $delete= DB::table('slider')->where('id', $id)->delete();
            if($delete)
            {
                echo 1;
            }else{
                echo 0;
            }
         }
    }
}
