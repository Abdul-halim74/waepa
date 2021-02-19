<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class memberModel extends Model
{
	

    protected $table= 'member_register';

     protected $fillable = ['user_img','signature_img'];
     
}
