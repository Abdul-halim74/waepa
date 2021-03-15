<?php

namespace App\Http\Controllers\Frontend_Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Image;
use Illuminate\Support\Facades\DB;

class FrontendMyProfileController extends Controller
{
   public function my_profile(Request $request){

   		$id =  $request->id;

   	$select_individual_user = DB::select(DB::raw("SELECT *,mr.id as mr_table_id, usr.id as user_id, usr.email as user_email, usr.member_id as user_member_id FROM `users` usr LEFT JOIN member_register mr on usr.member_id = mr.member_id WHERE usr.id='$id' "))[0];

	   // echo "<pre>";
	   // 	print_r($select_individual_user);

   		return view('frontend.my_profile', compact('select_individual_user'));
   }

   public function edit_my_profile(Request $request){
      $id =  $request->id;


        $single_member_info = DB::select(DB::raw("SELECT *,mr.id as mr_table_id, mr.name as mr_table_name, mr.email as mr_table_email,mr.mailing_address as mr_mailing_address , mr.member_id as mr_table_member_id,
       usr.status as user_table_status, usr.password FROM `member_register` mr left join users usr on mr.member_id = usr.member_id WHERE mr.id='$id'"))[0];

        // echo "<pre>";

        // print_r($single_member_info);die;

     return view('frontend.edit_my_profile',compact('single_member_info'));
   }

   public function update_profile(Request $request){

   		 $id = $request->hidden_id;
   		
   		  $hidden_member_id = $request->hidden_member_id;

   		  $single_member_info = DB::table('users')->where('member_id', $hidden_member_id)->first();

        $member_register_single_data = DB::table('member_register')->where('id', $id)->first();
        // echo "<pre>";
        // print_r($member_register_single_data);die;
      
   		  
   		  $user_table_id = $single_member_info->id;
        $user_table_name = $single_member_info->name;
        $user_table_email = $single_member_info->email;


   		 $name = $request->name;
   		 $email = $request->email;
   		 $contact = $request->contact;
   		 $mailing_address = $request->mailing_address;
   		 $user_img = $request->user_img;







       $position =  $request->position;
       $organization =  $request->organiz;
      
       $office_res = $request->office_res;
      
      $office_contact = $request->office_contact;
      $res_contract = $request->res_contract;
      $fax = $request->fax;
      $mobile = $request->mobile;
      $web = $request->web_acces;
      $date = $request->user_date;
        $commitment = $request->commit;
       $mail_addrress = $request->mail_addrress;



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


      
    

   		 DB::table('users')->where('id',$user_table_id)->update([

    		  'name' => $name,
        	'email' => $email,
    			
    	]);


   		 DB::table('member_register')->where('member_id', $hidden_member_id)->update([

    		  // 'name' => $name,
        // 	'email' => $email,
        // 	'mobile' => $contact,
        // 	'mailing_address' => $mailing_address,


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
        'email'=>$email,



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


    	]);




	 	if ($request->hasFile('user_img')) {
	 		
   			$user_image_fullname = $request->user_img;
   			
   			$user_image_filename_extension = $user_image_fullname->getClientOriginalExtension();
   			

   			 $filename = $id.".".$user_image_filename_extension;

   			 unlink(base_path('uploads/member_image/member_face/'.$member_register_single_data->user_img));

   			

   			 Image::make($user_image_fullname)->resize(600,600)->save(base_path('uploads/member_image/member_face/'.$filename));

   			 DB::table('member_register')->where('member_id', $hidden_member_id)->update([
   			 	'user_img'=>$filename
   			 ]);




	 	}//end user imgae update 


      if ($request->hasFile('signature_img')) {
      
        $user_signature_image_fullname = $request->signature_img;
        
        $user_signature_filename_extension = $user_signature_image_fullname->getClientOriginalExtension();
        

         $filename = $id.".".$user_signature_filename_extension;

         unlink(base_path('uploads/member_image/signature/'.$member_register_single_data->signature_img));

        

         Image::make($user_signature_image_fullname)->resize(300,300)->save(base_path('uploads/member_image/signature/'.$filename));

         DB::table('member_register')->where('member_id', $hidden_member_id)->update([
          'signature_img'=>$filename
         ]);




    }//end user imgae update 



   		 return back()->with('status','Data Updated Successfully');

  } //end update profile function


}
