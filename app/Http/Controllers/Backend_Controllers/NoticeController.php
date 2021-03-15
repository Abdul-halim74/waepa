<?php

namespace App\Http\Controllers\Backend_Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
class NoticeController extends Controller
{
    public function index()
    {
    	$data =DB::table('notice')->select('*')->orderBy('id', 'desc')->get();
    	return view('backend.notice.index', compact('data'));

    }

    public function create()
    {
    	return view('backend.notice.create');
    }


    public function store(Request $request)
    {
    	$request->validate([
    		'name' => 'required',
    		'title' => 'required',
    		'notice' => 'required|mimes:pdf',
    	],[
    		'name' => 'notice name not be empty',
    		'title' => 'notice name not be title',
    		'notice.required' => 'notice  not be empty',
    		'notice.mimes' => 'notice must be pdf file',

    	]);

    	$name = $request->name;
    	$title = $request->title;
    	$path = 'uploads/notice/';
    	/*if(!file_exists(public_path($path)))
    	{
    		\File::makeDirectory($path);

    	}*/

    	

    	$file = $request->notice;
    	$extension  = $file->getClientOriginalExtension();
    	$date = date('YmdHis').".";
    	$file_name  = $date.$extension;
    	$full_path = $path.$file_name;
    	move_uploaded_file($_FILES['notice']['tmp_name'], $full_path);

    	$insert = DB::table("notice")->insert([
    		'name' => $name,
    		'title' => $title,
    		'notice' => $full_path,
    		'status' => 1,
    		'create_by'=> Auth::user()->member_id,
    		'create_date' => date('Y-m-d'), 

    	]);

    	if($insert)
    	{
    		return redirect()->route('notice.index')->with('status', 'Notice  successfully Uploaded');
    	}



    }


    public function edit($id)
    {
    	$data = DB::table('notice')->select('*')->where('id', $id)->first();
    	return view('backend.notice.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {

    	$request->validate([
    		'name' => 'required',
    		'title' => 'required',
    		'notice' => 'mimes:pdf',
    	],[
    		'name' => 'notice name not be empty',
    		'title' => 'notice name not be title',
    		'notice.mimes' => 'notice must be pdf file',

    	]);

    	$data = DB::table('notice')->select('notice', 'id')->where('id', $id)->first();

    	$file_url = $data->notice;

    	if(isset($request->notice))
    	{
    		$path = 'uploads/notice/';
    		$file = $request->notice;
	    	$extension  = $file->getClientOriginalExtension();
	    	$date = date('YmdHis').".";
	    	$file_name  = $date.$extension;
	    	$full_path = $path.$file_name;
	    	move_uploaded_file($_FILES['notice']['tmp_name'], $full_path);

	    	if(file_exists($data->notice))
            {
                \File::delete($data->notice);
            }

	    	$file_url = $full_path;

    	}

    	$update = DB::table('notice')->update([

    		'name' =>$request->name,
    		'title' =>$request->title,
    		'notice' => $file_url,


    	]);

    	if($update)
    	{
    		return redirect()->route('notice.index')->with('status','Notice successfully updated');
    	}else{
    		return redirect()->route('notice.index')->with('status','Sorry Notice not updated yet');
    	}

    }

    public function delete(Request $request)
    {
    	 $id = $request->id;
         $data=DB::table('notice')->select('notice')->where('id', $id)->first();
         if(File_exists($data->notice))
         {
            \File::delete($data->notice);
            $delete= DB::table('notice')->where('id', $id)->delete();
            if($delete)
            {
                echo 1;
            }else{
                echo 0;
            }
         }
    }

    public function inactive($id){

        DB::table('notice')->where('id',$id)->update([
            "status"=>0
        ]);


        return back()->with('status', 'This Notice Already inactive ');
    }

    public function active($id){

        DB::table('notice')->where('id',$id)->update([
            "status"=>1
        ]);

         return back()->with('status', 'This Notice Already active ');
    }

}
