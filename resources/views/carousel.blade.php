@extends('layouts.app')

@section('content')
<div class="container">
    <div id="myCarousel" class="carousel slide" data-interval="2000" data-pause="false">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- Carousel items -->
    <div class="carousel-inner">
        <div class="active item"><img src="http://twitter.github.io/bootstrap/assets/img/bootstrap-mdo-sfmoma-01.jpg" alt=""></div>
    <div class="item"><img src="http://twitter.github.io/bootstrap/assets/img/bootstrap-mdo-sfmoma-02.jpg" alt=""></div>
    <div class="item"><img src="http://twitter.github.io/bootstrap/assets/img/bootstrap-mdo-sfmoma-03.jpg" alt=""></div>
    </div>
    <!-- Carousel nav -->
    <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
    <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>
</div>
@endsection