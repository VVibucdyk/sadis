<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
	
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="theme-color" content="#444444">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<link href="{{ asset('favicon.png') }}" rel="shortcut icon">

 	<!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
	
	<!--Web Title-->
	<title>{{ config('app.name', 'Laravel')  }}</title>
	
	<!-- Scripts -->
	<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/myScript.js') }}"></script>
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <style>
    	body{
    		font-family: Raleway, sans-serif;
    	}
		#loading {
			position: fixed;
			left: 0px;
			top: 0px;
			padding-top: 50vh;
			width: 100%;
			height: 100vh;
			z-index: 9999;
			background: #FFFFFF;
		}
    </style>
</head>
<body>
	<div id="app">
		<div id="loading" class="text-center">Mohon tunggu....</div>
		<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
			<a class="my-0 mr-md-auto font-weight-normal text-dark" href="/">
				<h5>Sistem Absensi Digital Sekolah</h5>
			</a>
			<nav class="my-2 my-md-0 mr-md-3">
				<span></span>
			</nav>
			<a class="btn btn-outline-primary" href="#">
				<span class="fa fa-user"></span>
			</a>
		</div>

		<div class="container">
			@yield('content')
		</div>
		
		<div class="footer">
			<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-dark border-bottom box-shadow">
				<small class="mr-md-auto font-weight-normal text-light">
					Powered by Laravel 5.4
				</small>
				<small class="text-light">
					Typed by : RPL
				</small>
			</div>
		</div>
	</div>
	
</body>
</html>