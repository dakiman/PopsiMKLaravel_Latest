@extends('front.front-layout') 
@section('content')
<div class="container-fluid my-4 pt-3">
    <div class="row">
        <div class="col-md-11 mx-auto">
            <div class="mx-auto btn-group" role="group" aria-label="Basic example">
                <a href="/catalogue"><button type="button" class="btn btn-secondary">@lang('messages.catalogue') </button></a>
                <i class="my-auto font-primary mx-2 fas fa-angle-right"></i>
                <button type="button" class="btn btn-primary">{{$category->translateTitle()}}</button>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid my-4">
    @include('partials.category-partial')
</div>
@endsection