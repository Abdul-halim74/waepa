<?php

namespace App\Http\Controllers\member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\memberModel;

class registrationController extends Controller
{
    public function member_register(Request $request)
    {
    	/*SELECT `id`, `member_id`, `name`, `position`, `organization`, `mailing_address`, `office_resident`, `education`, `office_no`, `resident_no`, `fax`, `mobile`, `web`, `user_img`, `signature_img`, `date`, `created_at`, `updated_at` FROM `member_register` WHERE 1*/
    	$quality_1= $request->qulification_1;
    	 $quality_2 = $request->qulification_2;
    	$quality_3= $request->qulification_3;

    	$qulity = $quality_1.",".$quality_2.",".$quality_3;

    	$member = new memberModel;
    	$member->member_id = 'null';
    	$member->name = $request->name;
    	$member->position = $request->position;
    	$member->organization = $request->organiz;
    	$member->mailing_address = $request->mail_addrress;
    	$member->office_resident = $request->office_res;
    	$member->education = $qulity;
    	$member->office_no = $request->office_contact;
    	$member->resident_no = $request->res_contract;
    	$member->fax = $request->fax;
    	$member->mobile = $request->mobile;
    	$member->web = $request->web_acces;
    	$member->date = $request->date;
        $member->email =$request->email;

    	$success = $member->save();
    	if($success)
    	{
    		return back();
    	}

    	

    }
}
