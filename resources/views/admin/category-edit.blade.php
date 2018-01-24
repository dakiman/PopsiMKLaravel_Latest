@extends('admin.admin-layout')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form enctype="multipart/form-data" method="POST" action="/admin/categories/{{$category->id}}">
                {{csrf_field()}}
                {{method_field('PATCH')}}
                @if(session('message'))
                <div style="font-size:24px;font-weight: bold;" class="text-center alert alert-success">
                    {{session('message')}}
                </div>
                @endif
                <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title_en">Име(EN)</label>
                                <input value="{{$category->title_en}}" class="form-control" type="text" name="title_en" id="title_en" required> 
                            </div>
                            <div class="form-group">
                                <label for="description_en">Опис(EN)</label>
                                <textarea rows="6" class="form-control" type="text" name="description_en" id="description_en" required>{{$category->description_en}}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title_mk">Име(MK)</label>
                                <input value="{{$category->title_mk}}" class="form-control" type="text" name="title_mk" id="title_mk" required>
                            </div>
                            <div class="form-group">
                                <label for="description_mk">Опис(MK)</label>
                                <textarea rows="6"  class="form-control" type="text" name="description_mk" id="description_mk" required>{{$category->description_mk}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <button class="btn btn-primary btn-block">Промени</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection