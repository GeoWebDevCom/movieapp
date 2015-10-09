@extends('pages.header')

<h1>{{$info['original_title']}}</h1> 

<img class="first-slide" id = "backdropimg" src="http://image.tmdb.org/t/p/original/{{$info['backdrop_path']}}" alt="Second slide" >

<h3>{{$info['vote_average']}} / 10 </h3> 

<h3> {{$info['vote_count']}} votes </h3>

<h3>{{$info['runtime']}} minutes</h3>

<p>{{$info['overview']}}</p>


@extends('pages.footer')