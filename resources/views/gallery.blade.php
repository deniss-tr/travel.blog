@extends('layouts.app')

@section('title', 'Travel Blog gallery')
@section('sub-css', asset("css/gallery.css"))


@section('content')
        <div class="gallery mr35">

    @foreach($pictures as $title => $pic)
            <a class="gallery-card" href="storage/images/{{$pic}}" data-lightbox="images" data-title="Title text text">
                <img class="gallery-img" src="images/small/{{$pic}}" alt="article img">
                <div class="card-img-title">{{$title}}</div>
            </a>
    @endforeach

    </div>
@endsection
