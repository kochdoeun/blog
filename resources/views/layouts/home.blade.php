@extends('layouts.main')

@section('include_css')
    <link 
		href="{{ asset('css/app.css') }}" 
		rel="stylesheet" 
		type="text/css" 
	/>
@endsection

@section('header')
	@include('partials.home-header')
@endsection

@section('content')
   <div class="container">
   		@yield('include_content')
   </div>
@endsection
@section('footer')
    @include('partials.footer')
@endsection