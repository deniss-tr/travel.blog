@extends('layouts.app')

@section('title', 'Travel Blog')

@section('content')
        <div class="gallery mr35">

        @for($i = 0; $i < 8; $i++)
                <div class="card" style="background: url(../images/small/{{ $articles[$i]->picture }}), center, no-repeat; background-size: cover;">
                    <div class="card-header">
                        <div class="card-header__title">
                            <h6>{{ $articles[$i]->title }}</h6>
                            <p>{{ $articles[$i]->picture_title }}</p>
                        </div>
                        <div class="card-header__date">
                            <p>{{ strtoupper(substr(date("F",strtotime($articles[$i]->created_at)),0, 3)) }}</p>
                            <p>{{ date("d",strtotime($articles[$i]->created_at)) }}th</p>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href='/posts/{{ $articles[$i]->id }}'>
                            <div class="card-footer__social">
                                <span><i class="fas fa-heart"></i></span><span>{{ $articles[$i]->likes->count() }}</span>
                                <span><i class="fas fa-comments"></i></span><span>{{ $articles[$i]->comments->count() }}</span>
                            </div>
                        </a>
                        <div class="card-footer__openimg">
                            <a href="storage/images/{{ $articles[$i]->picture }}" data-lightbox="images" data-title="Title text text">
                                <i class="fas fa-expand-arrows-alt"></i>
                            </a>
                        </div>
                    </div>
                </div>
        @endfor

        </div>

        <div class="about-me mr35">
            <div class="about-me__content">
                <h3 class="title">A Picture Is Worth A Thousand Words</h3>
                <p>People peter griffin high school mom bra just avenger le me students friend- zoned challenge accepted. True Story face troll finals derpina cereal guy lose back final week yao male. Not bad luke feel like a sir bacon pizza coffee a the avengers puking rainbows nyan cat search.</p>
                <a class="btn" href="">Learn More About Us</a>
            </div>
		</div>

        <main class="mr35">
            <article>
@for($i = 0; $i < 2; $i++)
		<a href="/posts/{{$articles[$i]->id}}">
			<div class="article article-wrapper_hov">
				<div class="article-header">
					<p>{{$articles[$i]->category}}</span></p>
					<p class="article-date">{{$articles[$i]->created_at}}</p>
				</div>
				<div class="article-header-inner">
					<h3 class="article-header__title">{{$articles[$i]->title}}
						<span class="likes-count"> 
							<i class="fas fa-heart fa-lg"></i> Likes count: <span class="likes-count-number">{{$articles[$i]->likes->count()}}</span>
						</span>
					</h3>
					<p class='article__author-name-title'>Author</p>
				</div>
				<div class="article-content">
					<div class="article-img">
						<img src="../images/small/{{$articles[$i]->picture}}" alt="article img">
						<div class="article-img__title">{{$articles[$i]->picture_title}}</div>
					</div> 
					<div class="article__text">
						<p>{{$articles[$i]->body}}</p>
					</div>
					<div class="article-author">
					@if( $articles[$i]->creator )
						<div class="author__name" >{{$articles[$i]->creator->name}}</div>
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
		</a>
@endfor			

				
            </article>
            <aside>
                <div class="side categorys">
					<h3>Categorys</h3>
					<ul>
					@foreach ($categorys as $category => $count)
						<li>
							<a href="/posts/category/{{ $category }}">
								<span class="side__arrow">&rtrif;</span> {{ $category }}  (<span class="category__count"> {{$count}} </span>)
							</a>
						</li>
						
					@endforeach
					
					</ul>
				</div>
                <div class="side archive">
					<h3>Archive</h3>
					<ul>
					@foreach ($dates as $month => $count)
						<li>
							<a href="/posts/archive/{{ $month }}">
								<span class="side__arrow">&rtrif;</span> {{ $month }}   (<span class="category__count"> {{ $count }} </span>)
							</a>
						</li>
					@endforeach
					</ul>
				</div>
            </aside>
        </main>
		
		<div class="main-bottom mr35">
			<form class="contact-form" method="post" action="/newcontact">
            @csrf
                <h3 class="inner-title">Contact Me</h3>
                <p>Mom hammer creepy me gusta morbi eat le friend steve jobs cellphone clinton cereal guy. </p>
                <input class="input-text" type="text" name="name" placeholder="Your Name">
                <label for="name" class="hide">*requered</label>
                <br>
                <input class="input-text" type="email" name="email" placeholder="Your E-Mail Address">
                <label for="email" class="hide">*please enter a valid address</label>
                <br>
                <textarea class="input-text input-text_aria" type="textaria" name="message" placeholder="Your Message"></textarea>
                <br>
                <input class="btn btn_submit" type="submit" value="SEND E-MAIL">
            </form>
			<div class="main-bottom-right">
                <a href="/posts/{{$random1->id}}">
                    <div class="random-post">
                        <h3 class="inner-title">{{ $random1->title }}</h3>
                        <div class="random-post-img" style="background: url(../images/small/{{ $random1->picture }}), center, no-repeat; background-size: cover;"></div>
                        <p>{{ $random1->picture_title }}</p>
                    </div>
                </a>
                <a href="/posts/{{$random2->id}}">
                <div class="random-post">
                    <h3 class="inner-title">{{ $random2->title }}</h3>
                    <div class="random-post-img" style="background: url(../images/small/{{ $random2->picture }}), center, no-repeat; background-size: cover;"></div>
                    <p>{{ $random1->picture_title }}</p>
                </div>
                </a>
				<form class="sub-form" method="post" action="/newsub">
                @csrf
                    <h2 class="title">TRAVEL BLOG</h2>
                    <h3 class="inner-title">Newsletter</h3>
                    <input class="input-text subs-email" type="email" name="subs-email" placeholder="Your E-Mail Address">
                    <input class="btn btn_submit" type="submit" value="SUBSCRIBE">
                </form>
            </div>
        </div>
        

@endsection
