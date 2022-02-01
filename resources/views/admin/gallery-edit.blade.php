@extends('admin.admin-layout')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <button class="btn m-b-1 submit-order-btn btn-primary">ЗАЧУВАЈ РАСПОРЕД</button>
            </div>
        </div>
        @if(session('message'))
            <div style="font-size:24px;font-weight: bold;" class="text-center alert alert-success">
                {{session('message')}}
            </div>
        @endif
        <div class="row">
            <div class="col-md-6 text-center">
                <span class="center-text font-size-40">ДОСТАПНИ СЛИКИ</span>
                <div class="row active-pictures">
                    @foreach ($allPictures as $picture)
                        @if(!in_array($picture->name, $activePictures))
                            <div class="{{$picture->id}} col-md-3">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <img class="img-responsive" style="width:150px;height:150px;"
                                             src="{{Storage::url('/carousel/'.$picture->name)}}" alt="">
                                    </div>
                                    <div class="cut-text panel-footer">{{$picture->name}}</div>
                                    <button style="white-space:normal;" data-id="{{$picture->id}}"
                                            data-picture="{{$picture->name}}" class="prepend-btn btn btn-primary m-a-1">
                                        Додади напред
                                    </button>
                                    <button style="white-space:normal;" data-id="{{$picture->id}}"
                                            data-picture="{{$picture->name}}" class="append-btn btn btn-success m-a-1">
                                        Додади позади
                                    </button>
                                    <button data-toggle="modal" data-target="#ticket-modal" data-id="{{$picture->id}}"
                                            style="white-space:normal;" class="btn btn-delete btn-danger m-a-1">Избриши
                                    </button>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="col-md-6 text-center">
                <span class="center-text font-size-40">СЕГАШЕН РАСПОРЕД</span>
                <div class="row gallery-order">
                    @foreach ($allPictures as $picture)
                        @if(in_array($picture->name, $activePictures))
                            <div class="col-md-3">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <img class="img-responsive" style="width:150px;height:150px;"
                                             src="{{Storage::url('/carousel/'.$picture->name)}}" alt="">
                                    </div>
                                    <div class="cut-text panel-footer">{{$picture->name}}</div>
                                    <button style="white-space:normal;" data-id="{{$picture->id}}"
                                            data-picture="{{$picture->name}}" class="remove-btn btn btn-danger m-a-1">
                                        Отстрани
                                    </button>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <form method="POST" class="gallery-order-form" style="display:none;" action="/admin/gallery/update">
        {{ csrf_field() }}
        @foreach ($allPictures as $picture)
            @if(in_array($picture->name, $activePictures))
                <input name="order[]" type="text" id="{{$picture->id}}" value="{{$picture->name}}">
            @endif
        @endforeach
    </form>

    @include('partials.modal')
@endsection

@section('optional-scripts')
    <script>
        App.getGalleryView();
    </script>
@endsection
