@extends('admin.admin-layout')
@section('content')
<div class="container-fluid">
    <div class="row">
        @foreach ($news as $news)
		<div class="{{$news->id}} col-md-2 panel text-center m-x-2">
            <div class="panel-body text-center">
                <img style="height:150px;width:100%;" src="{{Storage::url('/news/'.$news->pictures)}}" alt="">
                <div class="cut-text">{{$news->title_mk}}</div>
                <a href="/admin/news/{{$news->id}}/edit"><button class="btn btn-success btn-block m-b-1"><i class="fas fa-trash-alt"></i> Промени</button></a>
                <button data-id="{{$news->id}}" data-toggle="modal" data-target="#ticket-modal" class="btn btn-delete btn-danger btn-block m-b-1"><i class="fas fa-edit"></i> Избриши</button>
                <div class="row">
                    <div style="padding-left: 85px;" class="col m-y-4">
                        <label id="{{$news->id}}-label" for="{{$news->id}}" class="switcher switcher-lg switcher-primary"  >
                        <input class="active-check" type="checkbox" id="{{$news->id}}" @if($news->active) checked @endif>
                        <div class="switcher-indicator" class="text-xs-right">
                            <div class="switcher-yes">ON</div>
                            <div class="switcher-no">OFF</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@include('partials.modal')
@endsection

@section('optional-scripts')
    <script>App.getNewsView();</script>
@endsection
