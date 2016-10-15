<!DOCTYPE html>
<html>
	<head>
		<meta 
			http-equiv="Content-Type" 
			content="text/html; charset=UTF-8"
		/>
		<meta 
			name="viewport" 
			content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"
		/>
		<title> @yield('title')</title>
		<link 
			href="https://fonts.googleapis.com/icon?family=Material+Icons" 
			rel="stylesheet">
		<link 
			href="{{ asset('css/materialize.css') }}" 
			rel="stylesheet" 
			type="text/css" 
		/>
		<link 
			href="{{ asset('css/app.css') }}" 
			rel="stylesheet" 
			type="text/css" 
		/>
		@yield('include_css')
	</head>
	<body>
		<div class="header">
			@yield('header')
		</div>
		<div class="content">
			@yield('content')
		</div>
		<div class="footer">
			@yield('footer')
		</div>
		<script 
			type="text/javascript" 
			src="{{ asset('js/jquery-2.1.1.min.js') }}"
		></script>
		<script 
			type="text/javascript" 
			src="{{ asset('js/materialize.js') }}"
		></script>
		<script 
			type="text/javascript" 
			src="{{ asset('js/init.js') }}"
		></script>
		@yield('include_footer_js')
	</body>
</html>