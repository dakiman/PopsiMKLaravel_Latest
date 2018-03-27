@extends('front.front-layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 my-3">
            <div class="bg-white my-3 p-3 border-round">
                <span class="h2">{{$news->translateTitle()}}</span>
                <hr>
                <img class="float-left p-2" src="{{Storage::url('/news/'.$news->pictures)}}" alt="">
                <span class="">{{$news->translateDescription()}}</span> 
            </div>
        </div>
    </div>
</div>
{{--  
<div class="container mt-4 ">
    <div class="row">
        <div class="col-md-9 bg-white mx-auto">

            <div class="media">
                <img class="mr-3" src="{{Storage::url('/news/'.$news->pictures)}}" alt="Generic placeholder image">
                <div class="media-body">
                  <h5 class="mt-0">{{$news->translateTitle()}}</h5>
                    <p class="lead">{{$news->translateDescription()}}</p>
                </div>
              </div>
        </div>
    </div>
</div>  --}}
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
@endsection