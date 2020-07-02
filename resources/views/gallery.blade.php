@extends('layouts.app')

@section('title', 'Travel Blog gallery')
@section('sub-css', "css/gallery.css")


@section('content')
        <div class="gallery mr35">

            <a class="gallery-card" href="images/1.jpg" data-lightbox="images" data-title="Title text text">
                <img class="gallery-img" src="images/1.jpg" alt="article img">
                <div class="card-img-title">Text Title text lalal</div>
            </a>
            <a class="gallery-card" href="images/2.jpg" data-lightbox="images" data-title="Title text text">
                <img class="gallery-img" src="images/2.jpg" alt="article img">
            </a>
            <a class="gallery-card" href="images/2.jpg" data-lightbox="images" data-title="Title text text">
                <div class="gallery-img">3</div>
            </a>
            <a class="gallery-card" href="images/2.jpg" data-lightbox="images" data-title="Title text text">
                <div class="gallery-img">4</div>
            </a>
            <a class="gallery-card" href="images/2.jpg" data-lightbox="images" data-title="Title text text">
                <div class="gallery-img">5</div>
            </a>
            <a class="gallery-card" href="images/2.jpg" data-lightbox="images" data-title="Title text text">
                <div class="gallery-img">6</div>
            </a>
            <a class="gallery-card" href="images/2.jpg" data-lightbox="images" data-title="Title text text">
                <div class="gallery-img">7</div>
            </a>
            <a class="gallery-card" href="images/2.jpg" data-lightbox="images" data-title="Title text text">
                <div class="gallery-img">8</div>
            </a>
            <a class="gallery-card" href="images/2.jpg" data-lightbox="images" data-title="Title text text">
                <div class="gallery-img">9</div>
            </a>

    </div>
@endsection
