@extends('layouts.app')

@section('title', 'Travel Blog new posts')
@section('sub-css', asset("css/posts.css"))

@section('content')
<div class="new-article mr35">
    @if($errors->any())
    <div class="errors">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form enctype='multipart/form-data' class="new-article-form" method="post" action="/posts/new">
    @csrf
        <h3 class="inner-title">New post</h3>
        <div class="form-container">
            <div class="form-text">
                <label  for="title" class="small-txt">Title</label>
                <br>
                <input class="input-text new-post-input input-aria-style" type="text" name="title" placeholder="Your article title" value="{{ old('article') }}">
                <br>
                <label for="category" class="small-txt">Chose category</label>
                <br>
                <select class="input-text new-post-input input-aria-style" type="text" name="category" placeholder="chose category" value="{{ old('category') }}">
                    <option value="Luxery">Luxery</option>
                    <option value="Exotic">Exotic</option>
                    <option value="Local">Local</option>
                </select>
                <br>
                <label for="article" class="small-txt">Article</label>
                <br>
                <textarea class="input-text new-post-textaria input-text-aria-style" type="textaria" name="article" placeholder="Your article text">{{ old('article') }}</textarea>
                <br>
            </div>
            <div class="form-img">
                <label for="imgLoad" class="small-txt">Upload image 2mb max size</label>

                <label for="imgLoad" class="label-forloadBtn">IMAGE</label>
                <br>
                <input class="loadBtn" id="imgLoad" type="file" name="imgLoad">
                
                <div class="form-img-uploaded"></div>
                <label  for="img-title" class="small-txt">Image title</label>
                <br>
                <input class="input-text new-post-input input-aria-style" type="text" name="img-title" placeholder="Your image title">
            </div>
        </div>
    <input class="btn btn_submit" type="submit" value="SEND">
    </form>
</div>
<script src="{{ asset('js/newPost.js') }}"></script>
@endsection