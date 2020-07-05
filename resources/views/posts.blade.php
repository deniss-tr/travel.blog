@extends('layouts.app')

@section('title', 'Travel Blog posts')
@section('sub-css', "css/posts.css")


@section('content')
        <article>
@foreach ($articles as $article)
			<div class="article-wrapper">
                <div class="article">
                    <div class="article-header">
                        <p>{{$article->category}}</span></p>
                        <p class="article-date">{{$article->created_at}}</p>
                    </div>
                    <div class="article-header-inner">
                        <h3 class="article-header__title">{{$article->title}}<span class="heart like"><i class="fas fa-heart fa-lg"></i></h3>
                        <p class='article__author-name-title'>Author</p>
                    </div>
                    <div class="article-content">
                        <div class="article-img">
                            <img src="images/small/{{$article->picture}}" alt="article img">
                            <div class="article-img__title">{{$article->picture_title}}</div>
                        </div> 
                        <div class="article__text">
                            <p>{{$article->body}}</p>
                        </div>
                        <div class="article-author">
                            <div class="author__name">{{$article->creator->login}}</div>
                            <img class="article-author__img" src="images/a1.png" alt="author img">
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
				
				<div class="add-comment">
					<form class="add-comment-form">
						<input class="add-comment-text input-text" type="text" name="comment-text" placeholder="add comment">
						<input class="btn add-comment__btn" type="submit" value="add">
					</form>
				
				</div>
				
	@foreach ($article->comments as $comment)	
					<div class="article-comment-row">
						<div class="article-comment-container">
							<div class="comment-author">
								<div class="author-avatar"></div>
								<span class="comment-author__name">{{$comment->creator->login}}</span>
							</div>
							<div class="comment">
							{{$comment->body}}
							</div>
						</div>
					</div>
	@endforeach				
				</div>
@endforeach	


    <div class="pages">
        {{ $articles->links() }}
    </div>
        </article>
@endsection
