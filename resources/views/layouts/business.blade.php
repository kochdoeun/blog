@extends('layouts.main')

@section('include_css')
    <link 
		href="{{ asset('css/bpage.css') }}" 
		rel="stylesheet" 
		type="text/css" 
	/>
@endsection

@section('header')
	@include('partials.header')
@endsection

@section('content')
   	
	@yield('include_content')
	
@endsection
@section('footer')
    @include('partials.footer')
@endsection