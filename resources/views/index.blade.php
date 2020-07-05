@extends('layouts.app')

@section('title', 'Travel Blog')


@section('content')
        <div class="gallery mr35">

                <div class="card">
                    <div class="card-header">
                        <div class="card-header__title">
                            <h6>Awesome Day</h6>
                            <p>View from above</p>
                        </div>
                        <div class="card-header__date">
                            <p>JAN</p>
                            <p>25th</p>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href=''>
                            <div class="card-footer__social">
                                <span><i class="fas fa-heart"></i></span><span>37</span>
                                <span><i class="fas fa-comments"></i></span><span>15</span>
                            </div>
                        </a>
                        <div class="card-footer__openimg">
                            <a href="images/1.jpg" data-lightbox="images" data-title="Title text text"><i class="fas fa-expand-arrows-alt"></i></a>
                        </div>
                    </div>
                </div>

                <div class="card" style="background-image: 'images/1.jpg'">
                    <div class="card-header">
                        <div class="card-header__title">
                            <h6>New picture</h6>
                            <p>View from above</p>
                        </div>
                        <div class="card-header__date">
                            <p>JAN</p>
                            <p>25th</p>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href=''>
                            <div class="card-footer__social">
                                <span><i class="fas fa-heart"></i></span><span>37</span>
                                <span><i class="fas fa-comments"></i></span><span>15</span>
                            </div>
                        </a>
                        <div class="card-footer__openimg">
                            <a href="images/11.jpg" data-lightbox="images" data-title="Title text text"><i class="fas fa-expand-arrows-alt"></i></a>
                        </div>
                    </div>
                </div>


                <div class="card">3</div>
                <div class="card">4</div>
                <div class="card">5</div>
                <div class="card">6</div>
                <div class="card">7</div>
                <div class="card">8</div>
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
@foreach ($articles as $article)
                <div class="article">
                    <div class="article-header">
                        <p>{{$article->title}}</p>
						<p class="article-date">{{$article->created_at}}</p>
                    </div>
                    <div class="article-header-inner">
                        <h3 class="article-header__title">{{$article->title}}</h3>
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
@endforeach				

				
            </article>
            <aside>
                <div class="side categorys">
					<h3>Categorys</h3>
					<ul>
						<li><span class="side__arrow">&rtrif;</span> Traveling   (<span class="category__count"> 9 </span>)</li>
						<li><span class="side__arrow">&rtrif;</span> Photos    (<span class="category__count"> 28 </span>)</li>
						<li><span class="side__arrow">&rtrif;</span> Lifestyle    (<span class="category__count"> 4 </span>)</li>
						<li><span class="side__arrow">&rtrif;</span> Inspiration   (<span class="category__count"> 4 </span>)</li>
					</ul>
				</div>
                <div class="side archive">
					<h3>Archive</h3>
					<ul>
						<li><span class="side__arrow">&rtrif;</span> January   (<span class="category__count"> 9 </span>)</li>
						<li><span class="side__arrow">&rtrif;</span> February    (<span class="category__count"> 28 </span>)</li>
						<li><span class="side__arrow">&rtrif;</span> March    (<span class="category__count"> 4 </span>)</li>
						<li><span class="side__arrow">&rtrif;</span> June   (<span class="category__count"> 4 </span>)</li>
					</ul>
				</div>
            </aside>
        </main>
		
		<div class="main-bottom mr35">
			<form class="contact-form">
                <h3 class="inner-title">Contact Me</h3>
                <p>Mom hammer creepy me gusta morbi eat le friend steve jobs cellphone clinton cereal guy. </p>
                <input class="input-text" type="text" name="name" placeholder="Your Name">
                <label for="name">*requered</label>
                <br>
                <input class="input-text" type="email" name="email" placeholder="Your E-Mail Address">
                <label for="email">*please enter a valid address</label>
                <br>
                <textarea class="input-text input-text_aria" type="textaria" name="message" placeholder="Your Message"></textarea>
                <br>
                <input class="btn btn_submit" type="submit" value="SEND E-MAIL">
            </form>
			<div class="main-bottom-right">
				<div class="random-post">
                    <h3 class="inner-title">Random Post</h3>
                    <div class="random-post-img"></div>
                    <p>Some advise on Photography</p>
                </div>
                <div class="random-post">
                    <h3 class="inner-title">Random Post</h3>
                    <div class="random-post-img"></div>
                    <p>Some advise on Photography</p>
                </div>
				<form class="sub-form">
                    <h2 class="title">BLACK & WHITE</h2>
                    <h3 class="inner-title">Newsletter</h3>
                    <input class="input-text subs-email" type="email" name="subs-email" placeholder="Your E-Mail Address">
                    <input class="btn btn_submit" type="submit" value="SUBSCRIBE">
                </form>
            </div>
        </div>
        

@endsection
