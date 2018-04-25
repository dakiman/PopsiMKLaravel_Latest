@extends('front.front-layout')
@section('content')
<div class="container-fluid my-4 pt-3">
    <div class="row px-3">
        <div class="col-md-11 mx-auto">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/catalogue">@lang('messages.catalogue')</a></li>
              <li class="breadcrumb-item active" arica-current="page">{{ucfirst($category->translateTitle())}}</li>
            </ol>
          </nav>
        </div>
    </div>
</div>


<div class="container-fluid my-4">
    @include('partials.category-partial')
</div>
@endsection
