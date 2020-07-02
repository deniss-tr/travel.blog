@extends('layouts.app')

@section('title', 'Travel Blog posts')
@section('sub-css', "css/posts.css")



@section('content')
        <article>
            <div class="article-wrapper">
                <div class="article">
                    <div class="article-header">
                        <p>A Picture Is Worth A Thousand Words</span></p>
                        <p class="article-date">01/17/2014</p>
                    </div>
                    <div class="article-header-inner">
                        <h3 class="article-header__title">A Picture <span class="heart like"><i class="fas fa-heart fa-lg"></i></h3>
                        <p class='article__author-name-title'>Author</p>
                    </div>
                    <div class="article-content">
                        <div class="article-img">
                            <img src="images/1.jpg" alt="article img">
                            <div class="article-img__title">Flight over the country - 2014</div>
                        </div> 
                        <div class="article__text">
                            <p>Dad blizzard coffee unsave facepalm face feel like a sir tank mother aww yeah. Anonymous easter puking rainbows bear wodka simpson amnesia read cookie monster final week grey. Mom hammer creepy me gusta morbi eat le friend steve jobs cellphone clinton cereal guy. Good guy high school on okay a bacon homework in joke dog. Not Okay if you know what i mean nap monocle oh stop it, you pizza diablo 3 captain on weekend elephant. I Dont Get It drink ba dumm tss amet basic math female phone gentlemen strangers.</p>
                        </div>
                        <div class="article-author">
                            <div class="author__name">Den Tarasf</div>
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
				
				
                <div class="article-comment-row">
					<div class="article-comment-container">
						<div class="comment-author">
							<div class="author-avatar"></div>
							<span class="comment-author__name">kos</span>
						</div>
						<div class="comment">
							Heyy TEXXT LOL
						</div>
					</div>
                </div>
				
				<div class="article-comment-row">
					<div class="article-comment-container">
						<div class="comment-author">
							<div class="author-avatar"></div>
							<span class="comment-author__name">nana</span>
						</div>
						<div class="comment">
							Kuku bbb
						</div>
					</div>
                </div>
			
            </div>
            <div class="article">
                <div class="article-header">
                    <p>My First Trip to NYC</p>
                    <p class="article-date">01/15/2014</p>
                </div>
                <div class="article-header-inner">
                    <h3 class="article-header__title">Trip To New York Was Awesome</h3>
                    <p class='article__author-name-title'>Author</p>
                </div>
                <div class="article-content">
                    <div class="article-img">
                        <img src="images/2.jpg" alt="article img">
                        <div class="article-img__title">Manhatten Skyline- 2014</div>
                    </div> 
                    <div class="article__text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dad blizzard coffee unsave facepalm face feel like a sir tank mother aww yeah. Anonymous easter puking rainbows bear wodka simpson amnesia read cookie monster final week grey. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dad blizzard coffee unsave facepalm face feel like a sir tank mother aww yeah. Anonymous easter puking rainbows bear wodka simpson amnesia read cookie monster final week grey. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dad blizzard coffee unsave facepalm face feel like a sir tank mother aww yeah. Anonymous easter puking rainbows bear wodka simpson amnesia read cookie monster final week grey. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="article-author">
                        <div class="author__name">Jonas Duri</div>
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
            
        </article>
@endsection
