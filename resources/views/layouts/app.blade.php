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
		<link rel="stylesheet" type="text/css" href="{{ asset('lightbox/dist/css/lightbox.min.css') }}">
		<script src="{{ asset('lightbox/dist/js/lightbox.min.js') }}"></script>
		
		<link rel="stylesheet" type="text/css" href="@yield('sub-css')">
		
	</head>
		
	<body class="preload">
		<div class="wrapper">
			@include('inc.header')
			@yield('content')
			@include('inc.footer')
		</div>
		<script src="{{ asset('js/script.js') }}"></script>
    </body>
</html>