<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>@yield('title')</title>
		<link rel="stylesheet" type="text/css" href="{{ asset('fonts/fo/css/all.css') }}" >
		<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
		<link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="lightbox/dist/css/lightbox.min.css">
		<script src="{{ asset('lightbox/dist/js/lightbox.min.js') }}"></script>
		
		<link rel="stylesheet" type="text/css" href="@yield('sub-css')">
		
	</head>
		
	<body class="preload">
		<div class="wrapper">
			<header>
			  <div class="header-top">
				<div class="social">
					<ul>
						<li><a href=""><i class="fab fa-dribbble fa-lg"></i></a></li>
						<li><a href=""><i class="fab fa-twitter fa-lg"></i></a></li>
						<li><a href=""><i class="fab fa-behance-square fa-lg"></i></a></li>
						<li><a href=""><i class="fab fa-vimeo fa-lg"></i></a></li>
						<li><a href=""><i class="fab fa-git-square fa-lg"></i></a></li>
					</ul>
				</div>
				<div class="header__title">
					<a href="/"><h1 class="title">TRAVEL BLOG</h1></a>
				</div>
				<div class="menu">
					<nav class="nav-top">
						<ul>
							<li><a href="/posts">Posts</a></li>
							<li><a href="/gallery">Gallery</a></li>
							<li><a href="/signin">Sign in</a></li>
							<li><a href="/signup">Sign up</a></li>
						</ul>
					</nav>
					<div class="menu-btn">
						<div class="menu-btn__burger"></div>
					</div>
				</div>
			  </div>
			  <div class="header-inner hide">
				<nav class="nav-inner">
					<ul>
						<li><a href="/posts">Posts</a></li>
						<li><a href="/gallery">Gallery</a></li>
						<li><a href="/signin">Sign in</a></li>
						<li><a href="/signup">Sign up</a></li>
					</ul>
				</nav>
			  </div>
			</header>
			@yield('content')
			<footer>
				<div class="footer-top">
				  <div class="social">
					  <ul>
						  <li><a href=""><i class="fab fa-dribbble fa-lg"></i></a></li>
						  <li><a href=""><i class="fab fa-twitter fa-lg"></i></a></li>
						  <li><a href=""><i class="fab fa-behance-square fa-lg"></i></a></li>
						  <li><a href=""><i class="fab fa-vimeo fa-lg"></i></a></li>
						  <li><a href=""><i class="fab fa-git-square fa-lg"></i></a></li>
					  </ul>
				  </div>

				  <div class="year">
					2020
				  </div>
				</div>
			</footer>
		</div>
		<script src="{{ asset('js/script.js') }}"></script>
    </body>
</html>
