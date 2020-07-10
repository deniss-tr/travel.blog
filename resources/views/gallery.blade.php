@extends('layouts.app')

@section('title', 'Travel Blog gallery')
@section('sub-css', asset("css/gallery.css"))


@section('content')
    <div class="gallery mr35">

    @foreach($articles as $article)
            <a class="gallery-card" href="storage/images/{{$article->picture}}" data-lightbox="images" data-title="Title text text">
                <img class="gallery-img" src="images/small/{{$article->picture}}" alt="article img">
                <div class="card-img-title">{{$article->picture_title}}</div>
            </a>
    @endforeach

		<div class="pages">
			{{ $articles->links() }}
		</div>
	
    </div>
@endsection
