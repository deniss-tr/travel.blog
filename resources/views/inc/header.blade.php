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
            @if( auth()->check() )
                <li>
                    <a href="#">{{ auth()->user()->name }}</a>
                </li>
            @endif
        </ul>
    </div>
    <div class="header__title">
        <a href="/"><h1 class="title">TRAVEL BLOG</h1></a>
    </div>
    <div class="menu">
        <nav class="nav-top">
            <ul>
                <li><a href="/posts/new"><strong>New post</strong></a></li>
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
            <li><a href="/posts/new"><strong>New post</strong></a></li>
            <li><a href="/posts">Posts</a></li>
            <li><a href="/gallery">Gallery</a></li>
            <li><a href="/signin">Sign in</a></li>
            <li><a href="/signup">Sign up</a></li>
        </ul>
    </nav>
    </div>
</header>