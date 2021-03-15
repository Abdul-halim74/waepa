<?php

namespace App\Http\Controllers\member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\memberModel;

use Auth;
use Image;
use Illuminate\Support\Facades\DB;

class registrationController extends Controller
{
    public function member_register(Request $request)
    {
    	/*SELECT `id`, `member_id`, `name`, `position`, `organization`, `mailing_address`, `office_resident`, `education`, `office_no`, `resident_no`, `fax`, `mobile`, `web`, `user_img`, `signature_img`, `date`, `created_at`, `updated_at` FROM `member_register` WHERE 1*/
    	// $quality_1= $request->qulification_1;
    	//  $quality_2 = $request->qulification_2;
    	// $quality_3= $request->qulification_3;

    	// $qulity = $quality_1."|".$quality_2."|".$quality_3;

        // echo $request->name;die;

    	$member = new memberModel;
    	$member->member_id = 'null';
    	$member->name = $request->name;
    	$member->position = $request->position;
    	$member->organization = $request->organiz;
    	$member->mailing_address = $request->mail_addrress;
    	$member->office_resident = $request->office_res;
    	
    	$member->office_no = $request->office_contact;
    	$member->resident_no = $request->res_contract;
    	$member->fax = $request->fax;
    	$member->mobile = $request->mobile;
    	$member->web = $request->web_acces;
    	$member->date = $request->user_date;
        $member->commitment = $request->commit;
        $member->email =$request->email;

        // academic

         $member->academic_1_xm_title =$request->exam_title1;
         $member->academic_1_ins_name =$request->institute_name1;
         $member->academic_1_year_of_passing =$request->year_of_passing1;


          $member->academic_2_xm_title =$request->exam_title2;
         $member->academic_2_ins_name =$request->institute_name2;
         $member->academic_2_year_of_passing =$request->year_of_passing2;

          $member->academic_3_xm_title =$request->exam_title3;
         $member->academic_3_ins_name =$request->institute_name3;
         $member->academic_3_year_of_passing =$request->year_of_passing3;

          $member->academic_4_xm_title =$request->exam_title4;
         $member->academic_4_ins_name =$request->institute_name4;
         $member->academic_4_year_of_passing =$request->year_of_passing4;


          $member->academic_5_xm_title =$request->exam_title5;
         $member->academic_5_ins_name =$request->institute_name5;
         $member->academic_5_year_of_passing =$request->year_of_passing5;


          // title of thesis
        $member->title_of_thesis1 = $request->title_of_thesis1;
        $member->thesis_description1 = $request->thesis_description1;

         $member->title_of_thesis2 = $request->title_of_thesis2;
        $member->thesis_description2 = $request->thesis_description2;

        // Experience

          $member->total_year_of_academic_experience = $request->total_year_of_academic_exp;
          $member->description_of_academic_exp = $request->description_academic_exp;

          $member->total_year_of_professional_experience = $request->total_year_of_professional_exp;
          $member->description_of_professional_exp = $request->description_professional_exp;


          // Publication / Research

            $member->publication_research = $request->publication_and_research;
            $member->seminar = $request->seminar;
            $member->lecture = $request->lecture;
            $member->workshop = $request->workshop;
            $member->training = $request->training;
            $member->professional_membership = $request->professional_membership;


    	$success = $member->save();

         $last_inserted_id = $member->id;


        if ($request->hasFile('user_img')) {

            $member_image_fullname = $request->user_img;
            
            $member_image_filename_extension = $member_image_fullname->getClientOriginalExtension();
            

             $filename = $last_inserted_id.".".$member_image_filename_extension;

             //echo base_path('public/uploads/blog_image/'.$filename);

             Image::make($member_image_fullname)->resize(600,500)->save(base_path('uploads/member_image/member_face/'.$filename));

             memberModel::find($last_inserted_id)->update([
                'user_img'=>$filename
             ]);

        }


         if ($request->hasFile('signature_img')) {

            $sinature_image_fullname = $request->signature_img;
            
            $sinature_image_fullname_extension = $sinature_image_fullname->getClientOriginalExtension();
            

             $filename = $last_inserted_id.".".$sinature_image_fullname_extension;

             //echo base_path('public/uploads/blog_image/'.$filename);

             Image::make($sinature_image_fullname)->resize(200,100)->save(base_path('uploads/member_image/signature/'.$filename));

             memberModel::find($last_inserted_id)->update([
                'signature_img'=>$filename
             ]);

        }





    	if($success)
    	{
    		return back()->with('status','Registration Success');

    	}else{
            
            return back()->with('status','Registration Failed');
        }

    	

    }
}
