@extends('admin.admin-layout') 
@section('optional-scripts')
{{--  <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace()
</script>  --}}
<script>App.getItemsView();</script>
@endsection
 
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form enctype="multipart/form-data" method="POST" action="/admin/items">
            {{csrf_field()}}
            @if(session('message'))
            <div style="font-size:24px;font-weight: bold;" class="text-center alert alert-success">
                {{session('message')}}
            </div>
            @endif

            <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="title_en">Име(EN)</label>
                            <input class="form-control" type="text" name="title_en" id="title_en" required> 
                        </div>
                        <div class="form-group">
                            <label for="description_en">Опис(EN)</label>
                            <textarea  rows="6" class="form-control" type="text" name="description_en" id="description_en" required></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="title_mk">Име(MK)</label>
                            <input class="form-control" type="text" name="title_mk" id="title_mk" required>
                        </div>
                        <div class="form-group">
                            <label for="description_mk">Опис(MK)</label>
                            <textarea rows="6"  class="form-control" type="text" name="description_mk" id="description_mk" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                        <div class="col-md-2">

                            </div>
                    <div class="form-group col-md-6 col-md-offset-1">
                            <label for="sel1">Избери категорија:</label>
                            <select name="category_id" id="category_id" class="form-control" id="selector" required>
                            <option selected="selected"></option>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->title_mk }}</option>
                            @endforeach
                            </select>
                        <button class="btn btn-success btn-block pic-btn" type="button">
                                +Слика
                        </button>
                        <label for="cat_img" id="pic-label">Додади слика: </label>
                        <input class="form-control m-b-3" type="file" name="cat_img[]">
                        <button class="submit-btn btn btn-primary btn-block">Додади</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>

@endsection