@extends('admin.admin-layout') 
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 text-center">
            <span class="center-text font-size-40">ДОСТАПНИ СЛИКИ</span>
            <div class="row">
                @foreach ($activePictures as $picture)
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <img class="img-responsive" src="{{Storage::url('/carousel/'.$picture)}}" alt="">
                        </div>
                    <div style="word-wrap:break-word;" class="panel-footer">{{$picture}}</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="col-md-6 text-center">
            <span class="center-text font-size-40">СЕГАШЕН РАСПОРЕД</span>
            <div class="row">
                    @foreach ($allPictures as $picture)
                    @if(!in_array($picture->name, $activePictures))
                    <div class="col-md-3">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <img class="img-responsive" src="{{Storage::url('/carousel/'.$picture->name)}}" alt="">
                            </div>
                        <div style="word-wrap:break-word;" class="panel-footer">{{$picture->name}}</div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
        </div>
    </div>
</div>
@endsection