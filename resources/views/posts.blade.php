@extends('layouts.app')

@section('title', 'Travel Blog posts')
@section('sub-css', "css/posts.css")


@section('content')
        <article>
@foreach ($articles as $article)
			<a href="/posts/{{$article->id}}"><div class="article-wrapper article-wrapper_hov">
			<div class="article">
				<div class="article-header">
					<p>{{$article->category}}</span></p>
					<p class="article-date">{{$article->created_at}}</p>
				</div>
				<div class="article-header-inner">
					<h3 class="article-header__title">{{$article->title}}<span class="heart like"></h3>
					<p class='article__author-name-title'>Author</p>
				</div>
				<div class="article-content">
					<div class="article-img">
						<img src="../images/small/{{$article->picture}}" alt="article img">
						<div class="article-img__title">{{$article->picture_title}}</div>
					</div> 
					<div class="article__text">
						<p>{{$article->body}}</p>
					</div>
					<div class="article-author">
					@if( $article->creator )
						<div class="author__name" >{{$article->creator->name}}</div>
					@else
						<div class="author__name" >noname</div>
					@endif
						<div class="author-avatar"></div>
						<div class="article-author__soc">
							<ul>
								<li><i class="fab fa-facebook-f"></i></li>
								<li><i class="fab fa-twitter"></i></li>
								<li><i class="fab fa-instagram"></i></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
				
				
	<div class="post-statistics">Comments: {{count($article->comments)}} Likes: {{$article->likes_count}}</div>	
	
				</div>
				</a>
@endforeach	


    <div class="pages">
        {{ $articles->links() }}
    </div>
        </article>
@endsection
