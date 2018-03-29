@extends('front.front-layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 my-3">
            <div class="bg-white my-3 p-3 border-round clearfix">
                <span class="h2">{{$news->translateTitle()}}</span>
                <hr>
                <img class="float-left p-2" src="{{Storage::url('/news/'.$news->pictures)}}" alt="">
                <span class="">{{$news->translateDescription()}}</span>
            </div>
        </div>
    </div>
</div>
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
