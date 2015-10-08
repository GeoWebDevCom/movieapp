@extends('pages.header')

<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">movieApp</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
            <input id = "textbox" type="text" class="form-control" placeholder="Search a movie">
          </form>
        </div>
      </div>
    </nav>
    
  

    <div id="myCarousel" class="carousel slide" data-ride="carousel">

      <div class="carousel-inner" role="listbox" value = "{{$moviefirst['original_title']}}">

        <div class="item active">
          <img class="seventh-slide" id = "movieimg" src="{{$imgurl.$moviefirst['backdrop_path']}}" alt="First slide" >
          <div class="container">
            <div class="carousel-caption">
            </div>
          </div>
        </div>
        
        @foreach($movies as $movie)
        <div class="item" value = "{{$movie['original_title']}}">
          <img class="first-slide" id = "movieimg" src="{{$imgurl.$movie['backdrop_path']}}" alt="Second slide" >
          <div class="container">
            <div class="carousel-caption">
            </div>
          </div>
        </div>
        @endforeach

      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->

    <h2 id = "sectionheader">Top Rated</h2>

    <div class="container marketing" id = "top-rated">
 
      <div class="row">
        @foreach($toprated as $top)
        <div class="col-lg-4">
          <img class="img-circle" src="{{$imgurl.$top['backdrop_path']}}" alt="Generic placeholder image" width="140" height="140">
          <h2>{{$top['original_title']}}</h2>
          <p>{{$top['vote_average']}}/10 <br> {{$top['vote_count']}} Votes</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
         @endforeach
      </div>
     
  <hr class = "featurette-divider">
    
    @extends('pages.footer')