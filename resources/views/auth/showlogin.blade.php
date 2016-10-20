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
<div class="container login-container">

     <div class="float white z-depth-1 login-container-1">
         <h5>Sign in</h5>
         <hr/>
         <form class="col s12">
             <div class="row">
                 <div class="input-field col s12">
                   <input placeholder="This user name will use for login" id="loginname" type="text" class="validate">
                   <label for="loginname">Login name</label>
                 </div>
             </div>

             <div class="row">
                 <div class="input-field col s12">
                   <input placeholder="Type your password" id="tag" type="text" class="validate">
                   <label for="tag">Password</label>
                 </div>
             </div>

             <div class="row">
                 <div class="input-field col s12 signin-align-right">
                     <a class="waves-effect waves-light btn">
                         <i  class="material-icons right">cloud</i>
                         Sign in Now
                     </a>
                 </div>
             </div>

             <div class="row">
                 <div class="input-field col s12 lost-password">
                     <a class="blue-grey-text lighten-3" href="">
                        Lost your password?</a>
                 </div>
             </div>

             <div class="row">
                 <div class="input-field col s12">
                     <p>Don't have an account? <a class="red-text" href="register1.html">Sign up now, It's FREE!</a></p>
                 </div>
             </div>
         </form>
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
