@extends('layouts.app')

@section('title', 'Travel Blog sign in')
@section('sub-css', "css/sign.css")


@section('content')
		<div class="sign-container">
			<div class="sign-wrapper">
				<form class="sign-form" method="POST" action="{{ route('login') }}">
				@csrf
					<h2 class="sign-form-title">SIGN IN</h2>
					<input class="input-text" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Your email" autofocus>
					@error('email')
						<span class="invalid-data">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
					<input class="input-text" type="password" name="password" placeholder="Password" required>
					@error('password')
						<span class="invalid-data">
							<strong>{{ $message }}</strong>
						</span>
					@enderror

					<input class="btn btn_submit" type="submit" value="Login">
					<a href="">Forgot your password?</a>
				</form>
			</div>	
		</div>
@endsection