<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Popsi Lageri</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" href="{{asset('css/home.css')}}">
	{{--  <script src="https://use.fontawesome.com/daa2b1f496.js"></script>  --}}
<link rel="icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon" />
<link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon" />

	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Archivo+Narrow:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


</head>
<body>
	<!-- Navigation -->
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark  fixed-top p-0 shadow">
		<div class="container-fluid">
			<a class="navbar-brand p-0 m-0" href="/">
				<img class="d-inline-block align-top " height="70%" width="70%" id="logo" src="/img/logo.jpg" alt="">
			</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
			 aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse p-1" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="/">@lang('messages.home')</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/catalogue">@lang('messages.catalogue')</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/partners">@lang('messages.partners')</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/about-us">@lang('messages.about-us-title')</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/contact">@lang('messages.contact-single')</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							@if (app()->getLocale() == 'mk')
								<img class="" src="{{asset('img/mk-flag.png')}}" alt="">
							@else
								<img class="" src="{{asset('img/en-flag.png')}}" alt="">
							@endif
						</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
							<a class="dropdown-item" href="/changelocale/mk">Македонски</a>
							<a class="dropdown-item" href="/changelocale/en">English</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	@yield('content')
	<!-- /.container -->

	<footer class="py-3">
		<div class="container-fluid">
			<div class="row">
				<div class="offset-md-1 col-md-4 mx-auto my-auto">
					<div class="map-box">
						<iframe width="100%" height="210" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=popsi%20mk&key=AIzaSyDIG6UNz_JspNeBuQEHZSr5CIcvFXoxRmY"
						 allowfullscreen></iframe>
					</div>
				</div>
				<div class="offset-md-1 col-md-4 mx-auto my-auto ">
					<ul class="footer-info">
						<li>@lang('messages.popsi')</li>
						<li>@lang('messages.address') </li>
						<li>@lang('messages.skopje')</li>
						<li>@lang('messages.contact')</li>
						<li>@lang('messages.email')</li>
						<li>@lang('messages.phone')</li>
						<li>@lang('messages.mobile')</li>
					</ul>
				</div>
				<div class="col-md-1 my-auto ">
					<ul class="social-list ">
						<li>
							<i class="social-single soc-fb fab fa-facebook"></i>
						</li>
						{{--
						<li>
							<i class="social-single soc-tw fa fa-twitter"></i>
						</li>
						<li>
							<i class="social-single soc-ig fa fa-instagram"></i>
						</li> --}}
						<li>
							<i class="social-single soc-yt fab fa-youtube"></i>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<script src="{{asset('js/app.js')}}"></script>
	<script>
		App.getHomeView();
	</script>
</body>
</html>
