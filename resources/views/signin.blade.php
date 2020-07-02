@extends('layouts.app')

@section('title', 'Travel Blog sign in')
@section('sub-css', "css/sign.css")


@section('content')
		<div class="sign-container">
			<div class="sign-wrapper">
				<form class="sign-form">
					<h2 class="sign-form-title">SIGN IN</h2>
					<input class="input-text" type="text" name="login" placeholder="Your Login">
					<input class="input-text" type="password" name="password" placeholder="Password">
					<a href="">Forgot your password?</a>
					<input class="btn btn_submit" type="submit" value="Login">
				</form>
			</div>	
		</div>
@endsection
