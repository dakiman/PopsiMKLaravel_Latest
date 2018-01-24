@extends('admin.admin-layout') 
@section('content')
<div class="container-fluid">
    <div class="row my-4">
        <div class="col-md-8 col-md-offset-2 ">
            <label for="sel1">Избери категорија</label>
            <select class="form-control" id="selector">
                <option selected="selected"></option>
                @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->title_mk }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="row">
        @foreach ($items as $item)
        <div class="col-md-2 panel text-center m-x-2">
            <div class="panel-body">
                <img style="height:150px;width:150px;" src="{{Storage::url('/items/'.$item->pictures)}}" alt="">
                <h1>{{$item->title_mk}}</h1>
                <a href="/admin/items/{{$item->id}}/edit"><button class="btn btn-success btn-block m-b-1">Промени</button></a>
                <a href="/admin/items/delete/{{$item->id}}"><button class="btn btn-danger btn-block m-b-1">Избриши</button></a>
                <div class="row">
                    <div style="padding-left: 85px;" class="col m-y-4">
                        <label id="{{$item->id}}-label" for="{{$item->id}}" class="switcher switcher-lg switcher-primary">
                        <input class="active-check" type="checkbox" id="{{$item->id}}" @if($item->active) checked @endif>
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
    <script>App.getItemsView();</script>
@endsection