@extends('admin.admin-layout') 
@section('optional-scripts')
<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace()
</script>
@endsection
 
@section('content')
{{--  <div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form method="PUT" action="">
            <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="title_en">Име(EN)</label>
                            <input class="form-control" type="text" name="title_en" id="title_en">
                        </div>
                        <div class="form-group">
                            <label for="description_en">Опис(EN)</label>
                            <textarea  rows="6" class="form-control" type="text" name="description_en" id="description_en"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="title_mk">Име(MK)</label>
                            <input class="form-control" type="text" name="title_mk" id="title_mk">
                        </div>
                        <div class="form-group">
                            <label for="description_mk">Опис(MK)</label>
                            <textarea rows="6"  class="form-control" type="text" name="description_mk" id="description_mk"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <button class="btn btn-primary btn-block">Додади</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>  --}}

start here
@endsection