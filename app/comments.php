<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class comments extends Model
{
    public static function get_comments($id){
    	$comments = DB::table('comments')->where("movie_id", $id)->get();

    	return $comments;
    	
    }

    public static function add_comment($id, $comment, $comment, $date, $user){
    	DB::table('comments')->insert([
    		'movie_id'	=>	'$id',
    		'comment'	=>	'$comment',
    		'date_posted'	=>	'$date',
    		'posted_by'	=>	'$user'
    		]);
    }
    
}
