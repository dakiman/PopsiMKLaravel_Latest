@extends('admin.admin-layout') 

@section('content')
@if(session('message'))
<div style="font-size:24px;font-weight: bold;" class="text-center alert alert-success">
    {{session('message')}}
</div>
@endif
    <form enctype="multipart/form-data" action="/admin/gallery/store" method="post">
        {{csrf_field()}}
        
            <label for="cat_img" id="pic-label">Додади слика: </label>
            <input class="form-control m-b-3" type="file" name="car_img">
            <button class="submit-btn btn btn-primary btn-block">Додади</button>
    </form>
@endsection