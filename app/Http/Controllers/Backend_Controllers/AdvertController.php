<?php

namespace App\Http\Controllers\Backend_Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Image;
use Auth;
class AdvertController extends Controller
{
	

    public function index()
    {
    	$data =DB::table('advertisement')->select('*')->orderBy('id', 'desc')->get();
    	return view('backend.add.index', compact('data'));
    }

    public function create()
    {
    	return view('backend.add.create');
    }

    public function store(Request $request)
    {
    	

    	$validated = $request->validate([
	        'advertise' => 'required',
	        
	    ],[

	    	'advertise.required'=>'Advertise not be empty',
	    	'advertise.mimes'=>'Advertise must be na image',
	    ]);

        

         if ($request->hasFile('advertise')) {

            $date = date('YmdHis').".";
            $image_fullname = $request->advertise;
            $filename_extension = $image_fullname->getClientOriginalExtension();
            $filename = $date.$filename_extension;
            $path = 'uploads/advertisment/'.$filename;
            Image::make($image_fullname)->resize(1200, 400)->save(base_path('uploads/advertisment/'.$filename));
             
        }


        
        $insert = DB::table('advertisement')->insert([
            'title' => $request->title,
            'img' => $path,
            'create_by'=>Auth::user()->member_id,
            'create_date'=> date('Y-m-d'),
            'status'=> 0,

        ]);


        return redirect()->route('advert.index')->with('status', 'advertisemnet image insert successfull');
    	
    	

    	
		
    }

    public function edit($id)
    {
        $data = DB::table('advertisement')->select('id', 'title', 'img')->where('id', $id)->first();


        return view('backend.add.edit', compact('data'));

    }

    public function update(Request $request, $id)
    {
        $title = $request->title;
        $data = DB::table('advertisement')->select('id', 'img')->where('id', $id)->first();


        if($request->hasFile('advertise'))
        {

            $file = $request->advertise;
            $extension  = $file->getClientOriginalExtension();
            $date = date('YmdHis').".";
            $file_name = $date.$extension;
            $path= "uploads/advertisment/".$file_name;

            Image::make($file)->save(base_path("uploads/advertisment/".$file_name));

            $image_path = $data->img;  // Value is not URL but directory file path
            if(file_exists($image_path))
            {
                \File::delete($image_path);
            }


            DB::table('advertisement')->update([
                'img'=>$path,
                'title'=>$title,
            ]);



            return redirect()->back()->with('status', 'advertisement Update successul');


        }else{
            DB::table('advertisement')->update([
                'title'=>$title,
            ]);
            return redirect()->back()->with('status', 'advertisement Update not successul');
        }
    }


    public function active($id)
    {
        DB::table('advertisement')->update([
            'status' => 1,

        ]);

        return redirect()->back()->with('status', 'This advertisement is live now');
    }


     public function inactive($id)
    {
        DB::table('advertisement')->update([
            'status' => 0,

        ]);

        return redirect()->back()->with('status', 'This advertisement is disable ');
    }


    public function delete(Request $request)
    {
         $id = $request->id;
         $data=DB::table('advertisement')->select('id', 'img')->where('id', $id)->first();
         if(File_exists($data->img))
         {
            \File::delete($data->img);
            $delete= DB::table('advertisement')->where('id', $id)->delete();
            if($delete)
            {
                echo 1;
            }else{
                echo 0;
            }
         }

    }




}
