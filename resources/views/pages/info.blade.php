@extends('pages.header')

<h1>{{$info['original_title']}}</h1> 

<img class="first-slide" id = "backdropimg" src="http://image.tmdb.org/t/p/original/{{$info['backdrop_path']}}" alt="Second slide" >

<h3>{{$info['vote_average']}} / 10 </h3> 

<h3> {{$info['vote_count']}} votes </h3>

<h3>{{$info['runtime']}} minutes</h3>

<p>{{$info['overview']}}</p>

<hr class = "featurette-divider">

<div id = "comments">

	<h3>Comments</h3>
	@foreach($comments as $comment)

	<h5>{{ $comment->posted_by }}</h5>

	<p>{{ $comment->Comment }}</p>

	<p>{{ $comment->date_posted }}</p>

	@endforeach


</div>

<hr class = "featurette-divider">

<div id = "comment-form" class = "form-group">

{!! Form::open(array('url' => "/".$info['id'])) !!}

<div class = "form-group" id = "user">
{!! Form::text('user') !!}
</div>


<div class = "form-group">
{!! Form::textarea('comment') !!}
</div>

{!! Form::hidden('id', $info['id'] ) !!}

{!! Form::submit('Add Comment') !!}

{!! Form::close() !!}

</div>


@extends('pages.footer')