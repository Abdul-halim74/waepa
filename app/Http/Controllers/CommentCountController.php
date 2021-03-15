<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentCountController extends Controller
{
    public static function getCommentCount($id){
    	$total_comment = DB::table('frontend_blog_comments')->where('blog_id', $id)->count();
    	return $total_comment;
    }

    public static function getCommentCount2($id){
    	$total_comment = DB::table('enewsletter_comments')->where('blog_id', $id)->count();
    	return $total_comment;
    }

     public static function getCommentCount3($id){
    	$total_comment = DB::table('seminar_comments')->where('blog_id', $id)->count();
    	return $total_comment;
    }

    public static function getCommentCount4($id){
        $total_comment = DB::table('general_meeting_comments')->where('blog_id', $id)->count();
        return $total_comment;
    } 

    public static function getCommentCount5($id){

        $total_comment = DB::table('social_events-comments')->where('blog_id', $id)->count();
        return $total_comment;

    }
}
