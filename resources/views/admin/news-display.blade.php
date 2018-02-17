@extends('admin.admin-layout') 
@section('content')
<div class="container-fluid">
    <div class="row">
        @foreach ($news as $news)
        <div class="col-md-2 panel text-center m-x-2">
            <div class="panel-body text-center">
                <img style="height:150px;width:150px;" src="{{Storage::url('/news/'.$news->pictures)}}" alt="">
                <div>{{$news->title_mk}}</div>
                <a href="/admin/news/{{$news->id}}/edit"><button class="btn btn-success btn-block m-b-1"><i class="fas fa-trash-alt"></i> Промени</button></a>
                <a href="/admin/news/delete/{{$news->id}}"><button class="btn btn-danger btn-block m-b-1"><i class="fas fa-edit"></i> Избриши</button></a>
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
@endsection

@section('optional-scripts')
    <script>App.getNewsView();</script>
@endsection