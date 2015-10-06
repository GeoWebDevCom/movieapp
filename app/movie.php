<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    public static function now_playing(){
    	$movies = file_get_contents(""); //tmdb request here
    	$movies = html_entity_decode($movies);
    	$movies = json_decode($movies, true);

    	return $movies;
    }
}
