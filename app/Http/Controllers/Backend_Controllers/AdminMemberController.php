<?php

namespace App\Http\Controllers\Backend_Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class AdminMemberController extends Controller
{

  public function __construct()
    {
        $this->middleware('auth');
    }



  	public function memberlist(){

  		$data = DB::select(DB::raw("SELECT mr.* , usr.status as user_table_status FROM `member_register` mr left join users usr on  mr.member_id = usr.member_id ORDER BY mr.id desc"));

  		return view('backend.member.index',compact('data'));

  		
  	}

  	public function single_member_show(Request $request){

  		if ($request->ajax()) {
            try {
                $row_id =  $request->row_id;
               

                $single_member = DB::table('member_register')
          
            ->where('member_register.id', $row_id)
            ->first();

           

                 $view = view('backend.member.single_member', compact('single_member'))->render();
                return response()->json(['html' => $view]);
            } catch (\Exception $e) {
                echo $e->getMessage();
            }


        } else {
            echo 'This request is not ajax !';
        }

  	}


  	public function memberedit(Request $request){

  		$id = $request->id;	

  		
  		$single_member_info = DB::select(DB::raw("SELECT *,mr.id as mr_table_id, mr.name as mr_table_name, mr.email as mr_table_email,mr.mailing_address as mr_mailing_address , mr.member_id as mr_table_member_id,
       usr.status as user_table_status, usr.password FROM `member_register` mr left join users usr on mr.member_id = usr.member_id WHERE mr.id='$id'"))[0];


      // echo "<pre>";
      // print_r($single_member_info);die;

      $payment_history = DB::table('payment_log')->where('member_id',$single_member_info->member_id)->get();

  		// echo "<pre>";
  		// print_r($payment_history);die;

  		return view('backend.member.edit_member',  compact('single_member_info','payment_history'));

  	}

  	public function update_member(Request $request){

  		$user_id = Auth::user()->id;

  		  $id =  $request->hidden_id;
  		 $name =  $request->name;
       $position =  $request->position;
  		 $organization =  $request->organiz;
       $mail_addrress = $request->mail_addrress;

       $office_res = $request->office_res;
      
      $office_contact = $request->office_contact;
      $res_contract = $request->res_contract;
      $fax = $request->fax;
      $mobile = $request->mobile;
      $web = $request->web_acces;
      $date = $request->user_date;
        $commitment = $request->commit;
        $req_email =$request->email;



         // academic

         $academic_1_xm_title =$request->exam_title1;
         $academic_1_ins_name =$request->institute_name1;
         $academic_1_year_of_passing =$request->year_of_passing1;


          $academic_2_xm_title =$request->exam_title2;
         $academic_2_ins_name =$request->institute_name2;
         $academic_2_year_of_passing =$request->year_of_passing2;

          $academic_3_xm_title =$request->exam_title3;
         $academic_3_ins_name =$request->institute_name3;
         $academic_3_year_of_passing =$request->year_of_passing3;

          $academic_4_xm_title =$request->exam_title4;
         $academic_4_ins_name =$request->institute_name4;
         $academic_4_year_of_passing =$request->year_of_passing4;


          $academic_5_xm_title =$request->exam_title5;
         $academic_5_ins_name =$request->institute_name5;
         $academic_5_year_of_passing =$request->year_of_passing5;


          // title of thesis
        $title_of_thesis1 = $request->title_of_thesis1;
        $thesis_description1 = $request->thesis_description1;

         $title_of_thesis2 = $request->title_of_thesis2;
        $thesis_description2 = $request->thesis_description2;

        // Experience

          $total_year_of_academic_experience = $request->total_year_of_academic_exp;
          $description_of_academic_exp = $request->description_academic_exp;

          $total_year_of_professional_experience = $request->total_year_of_professional_exp;
          $description_of_professional_exp = $request->description_professional_exp;


          // Publication / Research

            $publication_research = $request->publication_and_research;
            $seminar = $request->seminar;
            $lecture = $request->lecture;
            $workshop = $request->workshop;
            $training = $request->training;
            $professional_membership = $request->professional_membership;


  		
  	

  		$single_member_data = DB::table('member_register')->where('id',$id)->first();

  		// echo "<pre>";
  		// print_r($single_member_data);
  		// die;
  		 $previous_payment = $single_member_data->payment;

  		 if ($previous_payment=='') {

  		 	$previous_payment=0;

  		 }

  		$email = $single_member_data->email;

  		 $member_id =  $request->member_id;



  		 $payment_now = $previous_payment + $request->payment_now;
       $payment_number = $request->payment_number;
       $transaction_id = $request->transaction_id;




  		  $active =  $request->active;
  		
  		  $password =  $request->password;

  		 $password_hash = Hash::make($request->password);

      $ec_member = $request->ec_member;


      if($ec_member=="Yes"){

           $select_ec = $request->select_ec;

          $ec_setting_data  = DB::table('ec_setting')->where('nth_ec',$select_ec)->first();

          $ec_setting_primary_key = $ec_setting_data->id;

      }else{

        $select_ec ='';
      }

       


      $member_cat = $request->member_cat;

    $member_cat_imp =  implode(',', $member_cat);

     $designation_from_waepa = $request->designation_from_waepa;

  		  DB::table('member_register')->where('id',$id)->update([

          'name'=>$name,

           'position' => $position, 
       'organization' => $organization, 
       'mailing_address'=> $mail_addrress,

       'office_resident'=>$office_res,
      
      'office_no'=>$office_contact, 
      'resident_no'=>$res_contract, 
      'fax'=>$fax,
      'mobile'=>$mobile, 
      'web'=>$web,
      'date'=>$date,
       'commitment'=> $commitment,
        'email'=>$req_email,



         // academic

         'academic_1_xm_title'=>$academic_1_xm_title, 
        'academic_1_ins_name'=> $academic_1_ins_name, 
        'academic_1_year_of_passing'=> $academic_1_year_of_passing, 


         'academic_2_xm_title'=> $academic_2_xm_title,
         'academic_2_ins_name'=>$academic_2_ins_name, 
         'academic_2_year_of_passing'=>$academic_2_year_of_passing ,




         'academic_3_xm_title'=> $academic_3_xm_title,
         'academic_3_ins_name'=>$academic_3_ins_name, 
         'academic_3_year_of_passing'=>$academic_3_year_of_passing ,



         'academic_4_xm_title'=> $academic_4_xm_title,
         'academic_4_ins_name'=>$academic_4_ins_name, 
         'academic_4_year_of_passing'=>$academic_4_year_of_passing ,



         'academic_5_xm_title'=> $academic_5_xm_title,
         'academic_5_ins_name'=>$academic_5_ins_name, 
         'academic_5_year_of_passing'=>$academic_5_year_of_passing ,

       
          // title of thesis
        'title_of_thesis1'=>$title_of_thesis1, 
        'thesis_description1'=>$thesis_description1 ,

         'title_of_thesis2'=>$title_of_thesis2, 
        'thesis_description2'=>$thesis_description2 ,

        // Experience

          'total_year_of_academic_experience'=>$total_year_of_academic_experience, 
          'description_of_academic_exp'=>$description_of_academic_exp ,

          'total_year_of_professional_experience'=>$total_year_of_professional_experience, 
          'description_of_professional_exp'=> $description_of_professional_exp ,


          // Publication / Research

            'publication_research'=>$publication_research ,
            'seminar'=>$seminar, 
            'lecture'=>$lecture ,
           'workshop'=> $workshop,
           'training'=> $training ,
            'professional_membership'=>$professional_membership ,


  		  	'member_id'=> $member_id,
  		  	'payment'=> $payment_now,
          'payment_number'=> $payment_number,
          'transaction_id'=> $transaction_id,

          'ec_member'=> $ec_member,
          'ec_setting_number'=> $select_ec,

          'ec_primary'=> $ec_setting_primary_key,

          'member_cat'=> $member_cat,
          'designation_from_waepa'=> $designation_from_waepa,

  		  ]);


        if ($request->hasFile('user_img')) {
      
        $user_image_fullname = $request->user_img;
        
        $user_image_filename_extension = $user_image_fullname->getClientOriginalExtension();
        

         $filename = $id.".".$user_image_filename_extension;

         unlink(base_path('uploads/member_image/member_face/'.$single_member_data->user_img));

        

         Image::make($user_image_fullname)->resize(600,600)->save(base_path('uploads/member_image/member_face/'.$filename));

         DB::table('member_register')->where('member_id', $single_member_data->member_id)->update([
          'user_img'=>$filename
         ]);




    }//end user imgae update 


      if ($request->hasFile('signature_img')) {
      
        $user_signature_image_fullname = $request->signature_img;
        
        $user_signature_filename_extension = $user_signature_image_fullname->getClientOriginalExtension();
        

         $filename = $id.".".$user_signature_filename_extension;

         unlink(base_path('uploads/member_image/signature/'.$single_member_data->signature_img));

        

         Image::make($user_signature_image_fullname)->resize(300,300)->save(base_path('uploads/member_image/signature/'.$filename));

         DB::table('member_register')->where('member_id', $single_member_data->member_id)->update([
          'signature_img'=>$filename
         ]);



    }  //end user imgae update 


      if ($request->payment_now=='' || $request->payment_now=='0') {
          

          return back()->with('status','Data Updated Successfully !!!');
    		 

      }else{

         DB::table('payment_log')->insert([
            'user_id'=>$user_id,
            'member_id'=>$member_id,
            'email'=>$email,
             'payment_number'=> $payment_number,
             'transaction_id'=> $transaction_id,
            // 'subject'=>$subject,
            // 'description'=>$description,
            'payment'=>$request->payment_now,
          ]);

      }

  		  $exist_member_check = DB::table('users')->where('member_id',$member_id)->first();

  		  // echo "<pre>";
  		  // print_r($exist_member_check);die;

  		   // $exist_member_check_id = $exist_member_check->id;

  		  if (!isset($exist_member_check->member_id)) {
	  		  	 DB::table('users')->insert([

	  		  	'member_id'=> $member_id,
	  		  	'name'=> $name,
	  		  	'email'=> $email,
	  		  	'password'=>$password_hash,
	  		  	'status'=>$active
	  		  ]);

  		  }elseif(isset($exist_member_check->member_id)){

  		  		$exist_member_check_id = $exist_member_check->id;

  		  	 DB::table('users')->where('id', $exist_member_check_id)->update([

	  		  	'member_id'=> $member_id,
	  		  	'name'=> $name,
	  		  	'email'=> $email,
	  		  	
	  		  	'status'=>$active

	  		  ]);
  		  }

  		 

  		  return back()->with('status','Data Updated Successfully !!!');



  	}




    public function ec_member_setting(Request $request){

      $ec_setting_data = DB::table('ec_setting')->orderBy('id','DESC')->get();

      return view('backend.member.ec_setting', compact('ec_setting_data'));

    }

    public function create_ec_number_submit(Request $request){

         $nth = $request->nth;
         $title = $request->title;

        $exist_check = DB::table('ec_setting')->where('nth_ec', $nth)->first();

        // echo "<pre>";

        // print_r($exist_check);die;


        if (isset($exist_check->id)) {

          return back()->with('status2', 'This data Already Exist !');
        }

         DB::table('ec_setting')->insert([
          "nth_ec"=>$nth ,
          "title"=>$title ,
         ]);

         return back()->with('status', 'Data Inserted Successfully !');

    }

    public function ec_setting_data_edit($id){

      $ec_setting = DB::table('ec_setting')->where('id',$id)->first();

      return view('backend.member.ec_setting_edit', compact('ec_setting'));
     
    }

    public function edit_ec_number_update(Request $request){

      $id = $request->hidden_id;
      $nth = $request->nth;
      $title = $request->title;

      DB::table('ec_setting')->where('id', $id)->update([

        "nth_ec"=>$nth,
        "title"=>$title,

      ]);

      return back()->with('status', 'Data Updated Successfully ! ');

    }


   public function ec_setting_delete(Request $request){

     if ($request->ajax()) {
            try {
                $id =  $request->id;
                //$single_blog = Blog::find($row_id);
                $single_cat = DB::table('ec_setting')->delete($id);

            } catch (\Exception $e) {
                echo $e->getMessage();
            }
        } 

        else {
            echo 'This request is not ajax !';
        }

    }


}
