@extends('admin.admin-layout') 
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-offset-2 col-md-8">
            {{--  <button class="btn btn-block btn-3d btn-danger">DODANI NOV</button>  --}}
        </div>
    </div>
    <div class="row">
        @foreach ($categories as $category)
        <div class="col-md-2 panel text-center m-x-2">
            <img style="height:150px;width:150px;" src="{{Storage::url('/categories/'.$category->picture)}}" alt="">
            <h1>{{$category->title_mk}}</h1>
            <a href="/admin/categories/{{$category->id}}/edit"><button class="btn btn-success btn-block m-b-1">Промени</button></a>
            <a href="/admin/categories/delete/{{$category->id}}"><button class="btn btn-danger btn-block m-b-1">Избриши</button></a>
        </div>
        @endforeach
    </div>
</div>
@endsection