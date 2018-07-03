@extends('front.front-layout') 
@section('content') @if(!empty($pictures)) @php $i = 0; 
@endphp
<header class=" d-none d-sm-block">
	<div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
		<ol class="carousel-indicators ">
			@foreach ($pictures as $picture)
			<li data-target="#carouselExampleIndicators" data-slide-to="{{$i}}" class="@if($picture == $pictures[0]) active @endif"></li>
			@php $i++; 
@endphp @endforeach
		</ol>
		<div class="carousel-inner" role="listbox">
			@foreach ($pictures as $picture)
			<div class="carousel-item @if($picture == $pictures[0]) active @endif" style="background-image: url('{{Storage::url('/carousel/' . $picture )}}');"></div>
			@endforeach
		</div>
	</div>
</header>
@endif

<div class="pt-2 container-fluid categories-section">
	<div class="@mobile text-center @endmobile">
		<span style="font-size: 28px;" class="@notmobile ml-4 @endnotmobile @mobile ml-1 @endmobile font-weight-bold"><i class="fas fa-shopping-cart"></i> Продажна Програма</span>
	</div>
	<hr>
	<div class="row">
		<div class="col">
			@include('front.categories')
		</div>
	</div>
</div>

@if(!$news->isEmpty())
<div class="container-fluid news-section">
	<div class="row">
		<div class="col-md-11 pt-2 mx-auto ">
			<div style="font-size: 40px;" class="text-primary">
				<i class="fas fa-newspaper"></i> @lang('messages.news')
				<hr>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-11 mx-auto mt-3">
			<div class="news-container">
				@foreach ($news as $singleNews)
				<div class="card sharp news-card text-center">
					<img class="card-img-top sharp img-fluid" src="{{Storage::url('/news/' . $singleNews->pictures )}}" alt="Card image cap">
					<div class="card-body">
						<a href="/news/{{$singleNews->id}}">
							<h5 class="cut-text card-title">{{ $singleNews->translateTitle() }}</h5>
						</a>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
@endif
@endsection