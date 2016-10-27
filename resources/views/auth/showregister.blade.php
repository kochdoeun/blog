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
		<div id="step1">
			@include('partials.auth.register.step1')
		</div>
		<div id="step2" class="hide">
			@include('partials.auth.register.step2')
		</div>
		<div id="step3" class="hide">
			@include('partials.auth.register.step3')
		</div>
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
