@extends('layouts.main')

@section('include_css')
	<link
			href="{{ asset('css/auth.css') }}"
			rel="stylesheet"
			type="text/css"
	/>
@endsection

@section('header')
	@include('partials.auth.header')
@endsection

@section('content')
	<div class="container white z-depth-1 register-container">
		<div class="float white z-depth-1 register-container1">
			<h5>Have an account?</h5>
			<hr/>
			<h6 style="margin: 35px auto 20px;">
				<a class="red-text" href="{{URL::to('login')}}">Sign in</a>
				If you don’t have an account you can create one below by entering your email address/username. Your
				account details will be confirmed via email.
			</h6>
		</div>
		@include('partials.auth.register.step1')
	</div>
@endsection

@section('footer')
	@include('partials.footer')
@endsection

@section('include_footer_js')
	<script
			type="text/javascript"
			src="{{ asset('js/auth.js') }}"
	></script>
@endsection
