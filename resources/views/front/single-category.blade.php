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
    <div class="row">
        <div class="col-md-11 mx-auto">
            <div class="items-container card border-primary">
                <div class="media">
                    <img class="mx-3 my-3" src="{{Storage::url('/categories/'.$category->picture)}}" alt="Generic placeholder image">
                    <div class="media-body my-auto px-2">
                        <h5 class="mt-0">{{$category->translateTitle()}}</h5>
                        {{$category->translateDescription()}}
                    </div>
                </div>
                <div class="card-body">
                    <div class="row mx-auto">
                        @foreach ($category->activeItems() as $item)
                        <div class="col-md-3 px-1 py-1">
                            <div class="card item-card text-center border-muted rounded mx-auto">
                                <img class="card-img-top" src="{{Storage::url('/items/'.$item->getCoverPhoto() )}}" alt="Card image cap">
                                <div class="card-body text-center">
                                    <div class="card-title ">{{$item->translateTitle()}}</div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection