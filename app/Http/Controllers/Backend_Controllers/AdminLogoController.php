<?php

namespace App\Http\Controllers\Backend_Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Image;

class AdminLogoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $logos = DB::table('logos')->select('*')->get();
        return view('backend.logos.index', compact('logos'));
    }
    public function create()
    {
        return view('backend.logos.create');
    }


    public function store(Request $request)
    {
        // $request->validate([
        //     'logo_image' => ['required'],
        // ]);

         $id = $request->hidden_id;

         $single_logo_info = DB::table('logos')->find($id);

        $logo_title = $request->logo_title;

         DB::table('logos')->where('id',$id)->update([
            "logo_title"=>$logo_title
        ]);

        if ($request->hasFile('logo_image')) {

            $logo_image_fullname = $request->logo_image;
            
            $logo_image_filename_extension = $logo_image_fullname->getClientOriginalExtension();
            

             $filename = $id.".".$logo_image_filename_extension;

              unlink(base_path('uploads/logo_image/'.$single_logo_info->logo_image));

             //echo base_path('public/uploads/blog_image/'.$filename);

             Image::make($logo_image_fullname)->resize(189,171)->save(base_path('uploads/logo_image/'.$filename));

             DB::table('logos')->where('id', $id)->update([
                "logo_image"=>$filename
            ]);


        }

        return back()->with('status','Data Updated Successfully !');
       
        
    }


    public function logo_edit(Request $request){

        $id = $request->id;

        $data = DB::table('logos')->where('id',$id)->first();

        return view('backend.logos.edit_logos', compact('data'));
    }
    // end :: store

    // public function active($id)
    // {
    //     $inacData = array();
    //     $inacData['display_status'] = 0;
    //     DB::table('logos')->whereIn('display_status', [0, 1])->update($inacData);
    //     $data = array();
    //     $data['display_status'] = 1;
    //     $data['updated_at'] = date('Y-m-d H:i:s');
    //     $data['updated_by'] = Auth::user()->id;   
    //     DB::table('logos')->where('id', $id)->update($data);
    //     return back()->with('status','Information Activete Successfully');
        
    // }// end :: active
    // public function deactive($id)
    // {
    //     $data = array();
    //     $data['display_status'] = 0;
    //     $data['updated_at'] = date('Y-m-d H:i:s');
    //     $data['updated_by'] = Auth::user()->id;   
    //     DB::table('logos')->where('id', $id)->update($data);
    //     return back()->with('status','Information Deactive Successfully');
        
    // }// end :: deactive


    public function destroy($id)
    {
        $logo = DB::table('logos')->select('*')->where('id', $id)->first();
        $data = array();
        $data['display_status'] = 0; 
        DB::table('logos')->where('id',$id)->delete();
        unlink(public_path($logo->logo_image));
        return back()->with('status','Information Deleted Successfully');
        
    }// end :: destroy
    
}// end :: AdminLogoController
