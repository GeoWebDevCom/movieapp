<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    public static function now_playing(){
    	$movies = file_get_contents("http://api.themoviedb.org/3/movie/now_playing?api_key=ed85f5d2d688e1a2deb331c752f3dd14");
    	$movies = html_entity_decode($movies);
    	$movies = json_decode($movies, true);
    	$movies = $movies['results'];

    	$movielist = array();
    	foreach ($movies as $movie) {

    		if($movie['backdrop_path'] != null){
    			array_push($movielist, $movie);
    		}
    	}

    	return $movielist ;
    }

    public static function top_rated(){
    	$toprated = file_get_contents("http://api.themoviedb.org/3/movie/top_rated?api_key=ed85f5d2d688e1a2deb331c752f3dd14");
    	$toprated = html_entity_decode($toprated);
    	$toprated = json_decode($toprated, true);
    	$toprated = $toprated['results'];

    	return $toprated;

    }

    public static function get_info($id){
        $info = file_get_contents("https://api.themoviedb.org/3/movie/$id?api_key=ed85f5d2d688e1a2deb331c752f3dd14");
        $info = html_entity_decode($info);
        $info = json_decode($info, true);

        return $info;

    }

    public static function search_movie($title){
        //search movie
    }
}