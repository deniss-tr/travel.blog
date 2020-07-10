@extends('layouts.app')

@section('title', 'Travel Blog post')
@section('sub-css', asset("css/posts.css"))


@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
        <article>
			<div class="article-wrapper">
			<div class="del-form">
				<button class="close-btn" onclick="document.querySelector('.del-form').style.display='none'">
					<i class="fas fa-times fa-3x"></i>
				</button>
				<form class="form-del-post" method="post" action="/posts/{{ $article->id }}">
				@method('delete')
				@csrf
					<h4>Are you sure you want to delete this post?</h4>
					<input class="btn" type="submit" value="DELETE">
				</form>
			</div>
				<div class="article">
					<div class="article-header">
						<p><span>{{$article->category}}</span></p>
						<p class="article-date">
						@if(auth()->check() and auth()->user()->id == $article->user_id)
						<span class="header-edit-post">
							<a href="/posts/{{ $article->id }}/edit"><i class="fas fa-edit fa-lg"></i></a>
							<button class='delBtn' onclick="document.querySelector('.del-form').style.display='block'">
								<i class="fas fa-trash-alt fa-lg"></i>
							</button>
						</span>
						@endif
						{{$article->created_at}}</p>
					</div>
					<div class="article-header-inner">
						<h3 class="article-header__title">{{$article->title}}
						@if(auth()->check())
						<span class="heart {{ $likeValue }}">

							<input class="article_id" type="hidden" name="article_id" value="{{ $article->id }}" />
							<input class="user_id" type="hidden" name="user_id" value="{{ $userId }}" />
							<i class="fas fa-heart fa-lg"></i>
							<span class="likes-count">Likes count: <span class="likes-count-number">{{$likesCount}}</span></span>
						</h3>
						@else
							<span class="likes-count"> <i class="fas fa-heart fa-lg"></i> Likes count: <span class="likes-count-number">{{$likesCount}}</span></span>
						</h3>
							
						@endif
						<p class='article__author-name-title'>Author</p>
					</div>
					<div class="article-content">
						<div class="article-img">
							<a data-lightbox="images" href="../storage/images/{{$article->picture}}">
							<img src="../images/small/{{$article->picture}}" alt="article img">
							</a>
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
				@if( auth()->check() )
				<div class="add-comment">
					<form class="add-comment-form" method="post" action="/comments">
					@csrf
						<input class="add-comment-text input-text" type="text" name="body" placeholder="add comment">
						<input type="hidden" name="article_id" value="{{ $article->id }}" />
						<input class="btn add-comment__btn" type="submit" value="add">
					</form>						
				</div>
									
				@endif
				
	@foreach ($article->comments as $comment)	
					<div class="article-comment-row">
						<div class="article-comment-container">
							<div class="comment-author">
								<div class="author-avatar"></div>
								<span class="comment-author__name">{{$comment->creator->name}}</span>
							</div>
							<div class="comment">
							{{$comment->body}}
							</div>
						</div>
					</div>
	@endforeach				
				</div>


        </article>
@endsection
