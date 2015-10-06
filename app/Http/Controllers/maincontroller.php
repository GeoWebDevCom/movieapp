<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\movie;

class maincontroller extends Controller
{
    public function index(){
    	$movies = movie::now_playing();
    	$movies = $movies['results'];
    	$imgurl = "http://image.tmdb.org/t/p/original"; //use backdrop_path to get picture
    	
    	return view('pages.index');
    }

}

