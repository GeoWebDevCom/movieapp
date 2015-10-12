@extends('pages.header')

<h1>{{$info['original_title']}}</h1> 

<img class="first-slide" id = "backdropimg" src="http://image.tmdb.org/t/p/original/{{$info['backdrop_path']}}" alt="Second slide" >

<h3>{{$info['vote_average']}} / 10 </h3> 

<h3> {{$info['vote_count']}} votes </h3>

<h3>{{$info['runtime']}} minutes</h3>

<p>{{$info['overview']}}</p>

<div id = "comments">


</div>

<div id = "comment-form" class = "form-group">

{!! Form::open() !!}

{!! Form::text('user') !!}

{!! Form::textarea('comment') !!}

{!! Form::submit('Add Comment') !!}

{!! Form::hidden('id', '{{$info['id']}}') !!}

{!! Form::close() !!}

<div>


@extends('pages.footer')