@extends('pages.header')

<h1>{{$info['original_title']}}</h1>

<h3>{{$info['vote_average']}} / 10 </h3>

<p>{{$info['overview']}}</p>

<img src="http://image.tmdb.org/t/p/original/{{$info['backdrop_path']}}" >


@extends('pages.footer')