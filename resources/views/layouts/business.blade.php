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
   <div class="container">
   		@yield('include_content')
   </div>
@endsection
@section('footer')
    @include('partials.footer')
@endsection