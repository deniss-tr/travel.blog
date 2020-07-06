@extends('layouts.app')

@section('title', 'Travel Blog sign up')
@section('sub-css', "css/sign.css")


@section('content')
		<div class="sign-container">
			<div class="sign-wrapper">
				<form class="sign-form" method="POST" action="{{ route('register') }}">
				@csrf
					<h2 class="sign-form-title">SIGN UP</h2>
					<input class="input-text" type="text" name="name" placeholder="Your Name" value="{{ old('name') }}" required autocomplete="name" autofocus>
					@error('name')
						<span class="invalid-data">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
					<input class="input-text" type="email" name="email" placeholder="E-Mail Address" value="{{ old('email') }}" required autocomplete="email">
					@error('email')
						<span class="invalid-data">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
					<input class="input-text" type="password" name="password" placeholder="Password">
					@error('password')
						<span class="invalid-data">
							<strong>{{ $message }}</strong>
						</span>
					@enderror					
					<input class="input-text" type="password" name="password_confirmation" placeholder="Confirm password">					
					<input class="btn btn_submit" type="submit" value="Register">
				</form>
			</div>	
		</div>
@endsection
