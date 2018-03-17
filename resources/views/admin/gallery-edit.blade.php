@extends('admin.admin-layout') 
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 text-center">
            <span class="center-text font-size-40">ДОСТАПНИ СЛИКИ</span>
            <div class="row">
                @foreach ($allPictures as $picture) 
                @if(!in_array($picture->name, $activePictures))
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <img style="width:150px;height:150px;" src="{{Storage::url('/carousel/'.$picture->name)}}" alt="">
                        </div>
                        <div class="cut-text panel-footer">{{$picture->name}}</div>
                        <button style="white-space:normal;" data-picture="{{$picture->name}}" class="prepend-btn btn btn-primary m-a-1">Додади напред</button>
                        <button style="white-space:normal;" data-picture="{{$picture->name}}" class="append-btn btn btn-success m-a-1">Додади позади</button>
                    </div>
                </div>
                @endif 
                @endforeach
            </div>
        </div>
        <div class="col-md-6 text-center">
            <span class="center-text font-size-40">СЕГАШЕН РАСПОРЕД</span>
            <div class="row gallery-order">
                @foreach ($activePictures as $picture)
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <img style="width:150px;height:150px;" src="{{Storage::url('/carousel/'.$picture)}}" alt="">
                        </div>
                        <div class="cut-text panel-footer">{{$picture}}</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<form class="gallery-order-form" style="display:none;" action="">
</form>
@endsection
 
@section('optional-scripts')
<script>
    App.getGalleryView();
</script>
@endsection