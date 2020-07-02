@extends('layouts.app')

@section('title', 'Travel Blog sign up')
@section('sub-css', "css/sign.css")


@section('content')
		<div class="sign-container">
			<div class="sign-wrapper">
				<form class="sign-form">
					<h2 class="sign-form-title">SIGN UP</h2>
					<input class="input-text" type="text" name="login" placeholder="Your Login">
					<input class="input-text" type="email" name="email" placeholder="E-Mail Address">
					<input class="input-text" type="password" name="password" placeholder="Password">					
					<input class="input-text" type="password" name="password" placeholder="Confirm password">					
					<input class="btn btn_submit" type="submit" value="Register">
				</form>
			</div>	
		</div>
@endsection
