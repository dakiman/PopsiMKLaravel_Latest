@extends('front-new.layout')
@section('content')
    @notmobile
    @include('front-new.carousel-partial')
    @endnotmobile
    @include('front-new.products-partial')
@endsection
