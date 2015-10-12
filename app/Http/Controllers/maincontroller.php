<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\movie;
use App\comments;

class maincontroller extends Controller
{
    public function index(){
    	$movies = movie::now_playing();
    	$moviefirst = $movies[0];
    	$movies = array_slice($movies, 1, (count($movies)));
    	$imgurl = "http://image.tmdb.org/t/p/original";

    	$toprated = movie::top_rated();
    	
    	return view('pages.index', compact(array('moviefirst', 'movies', 'imgurl', 'toprated')));
    }

    public function movie_details($id){
    	$info = movie::get_info($id);
        $credits = movie::get_credits($id);
        $comments = comments::get_comments($id);

    	return view('pages.info', compact(array('info', 'comments')));
    }

    public function upload_comment($id, Request $request){
        $comment = $request->get('comment');
        $user = $request->get('user');
        $date = date('m-d-y');
        
        comments::add_comment($id, $comment, $date, $user);
    }

}

