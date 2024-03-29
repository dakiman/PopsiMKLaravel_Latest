@extends('admin.admin-layout')
@section('content')
<div class="container-fluid">
    <div class="row">
        @foreach ($categories as $category)
		<div class="{{$category->id}} col-md-2 panel text-center m-x-2">
            <div class="panel-body">
                <img style="height:150px;width:100%;" src="{{Storage::url('categories/'.$category->picture)}}" alt="">
                <div>{{$category->title_mk}}</div>
                <a href="/admin/categories/{{$category->id}}/edit"><button class="btn btn-success btn-block m-b-1"><i class="fas fa-edit"></i> Промени</button></a>
				<button data-toggle="modal" data-target="#ticket-modal" data-id="{{$category->id}}" class="btn btn-delete btn-danger btn-block m-b-1"><i class="fas fa-trash-alt"></i>Избриши</button>
                <div class="row">
                    <div style="padding-left: 85px;" class="col m-y-4">
                        <label id="{{$category->id}}-label" for="{{$category->id}}" class="switcher switcher-lg switcher-primary"  >
                        <input class="active-check" type="checkbox" id="{{$category->id}}" @if($category->active) checked @endif>
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
    <script>App.getCategoriesView();</script>
@endsection
