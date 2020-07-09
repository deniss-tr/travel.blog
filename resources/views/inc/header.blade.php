@section('header')
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
				@if( auth()->check() )
					<li><a class="nav-top-list-item" href="/posts/new"><strong>New post</strong></a></li>
				@endif
                <li><a class="nav-top-list-item" href="/posts">Posts</a></li>
                <li><a class="nav-top-list-item" href="/gallery">Gallery</a></li>
				@if( !auth()->check() )
					<li><a class="nav-top-list-item" href="/login">Sign in</a></li>
					<li><a class="nav-top-list-item" href="/register">Sign up</a></li>
				@else

					<li>
						<button class="dropdown-btn">( {{ auth()->user()->name }} )</button>
						  <div class="dropdown-container hide">
							<div class="dropdown-item"><a href="/myposts">My posts</a></div>
							<div class="dropdown-item">
								<a href="{{ route('logout') }}"
								   onclick="event.preventDefault();
												 document.getElementById('logout-form').submit();">
									{{ __('Logout') }}
								</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
								</form>								
							</div>
						  </div>
					</li>
				@endif
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
			@if( auth()->check() )
			<li><a href="/posts/new"><strong>New post</strong></a></li>
			<li><a href="/myposts">My posts</a></li>	
			@endif
            <li><a href="/posts">Posts</a></li>
            <li><a href="/gallery">Gallery</a></li>
			@if( auth()->check() )
			<li>
				<a href="{{ route('logout') }}"
				   onclick="event.preventDefault();
								 document.getElementById('logout-form').submit();">
					{{ __('Logout') }}
				</a>
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					@csrf
				</form>			
			</li>
			@else
            <li><a href="/login">Sign in</a></li>
            <li><a href="/register">Sign up</a></li>
			@endif
        </ul>
    </nav>
    </div>
</header>