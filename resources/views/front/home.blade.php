@extends('front.front-layout') 
@section('content')
@php
	$i = 0;
@endphp
<header class=" d-none d-sm-block">
	<div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
		<ol class="carousel-indicators ">
			@foreach ($pictures as $picture)
			<li data-target="#carouselExampleIndicators" data-slide-to="{{$i}}" class="@if($picture == $pictures[0]) active @endif"></li>
			@php $i++; @endphp
			@endforeach
			{{--  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>  --}}
		</ol>
		<div class="carousel-inner" role="listbox">
			@foreach ($pictures as $picture)
		<div class="carousel-item @if($picture == $pictures[0]) active @endif" style="background-image: url('{{Storage::url('/carousel/' . $picture )}}');"></div>
			
			@endforeach			
			{{--  <div class="carousel-item active" style="background-image: url('/img/carousel/05_Ruedas_dentadas_engranajes_cadenas_titanio.jpg');"></div>  --}}
			{{--  <div class="carousel-item" style="background-image: url('/img/carousel/cuscinetti.png')"></div>  --}}
			{{--  <div class="carousel-item" style="background-image: url('/img/carousel/pexels-photo-190574.jpeg')"> </div>  --}}
			{{--  <div class="carousel-item" style="background-image: url('/img/carousel/pexels-photo-290297.jpeg')"> </div>  --}}
		</div>
	</div>
</header>
<!-- Page Content -->
{{--  <div class="container-fluid">
	<div class="row py-2">
		<div class="col-md-4 text-center mx-auto">
			<span style="font-size: 40px;" class="text-primary">@lang('messages.products')</span>
			<br>
			<i style="font-size: 35px;font-weight: bold;" class="fa fa-2x fa-angle-down text-muted"></i>
			<hr>
		</div>
	</div>
</div>  --}}
	
@include('front.categories')

{{--  <div class="container-fluid">
	<div class="row py-2">
		<div class="col-md-11">
			<span style="font-size: 40px;" class="text-primary">@lang('messages.news')</span>
			<br>
			<i style="font-size: 35px;font-weight: bold;" class="fa fa-2x fa-angle-down text-muted"></i>
			<hr>
		</div>
	</div>
</div>  --}}

<div class="container-fluid news-section">
	<div class="row">
		<div class="col-md-11 pt-2 mx-auto ">
			<div style="font-size: 40px;" class="text-primary">
				<i class="fas fa-newspaper"></i>
				@lang('messages.news')
				<hr>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-11 text-center mx-auto mt-3">
			<div class="news-container">
				@foreach ($news as $singleNews)
				<div class="card news-card">
					<img class="card-img-top img-fluid" src="{{Storage::url('/news/' . $singleNews->pictures )}}" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">{{ $singleNews->translateTitle() }}</h5>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>

@endsection