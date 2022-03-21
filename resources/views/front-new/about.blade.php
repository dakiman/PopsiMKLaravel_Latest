@extends('front-new.layout')
@section('content')
    <div class="page-heading about-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4>@lang('messages.about-us-title')</h4>
                        <h2>@lang('messages.our-company')</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="best-features about-features">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>@lang('messages.about-us-title')</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-image">
                        <img src="{{asset('images/feature-image.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="left-content">
                        <p>@lang('messages.about-us')</p>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{--    <div class="happy-clients">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12">--}}
{{--                    <div class="section-heading">--}}
{{--                        <h2>Happy Partners</h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-12">--}}
{{--                    <div class="owl-clients owl-carousel">--}}
{{--                        <div class="client-item">--}}
{{--                            <img src="assets/images/client-01.png" alt="1">--}}
{{--                        </div>--}}

{{--                        <div class="client-item">--}}
{{--                            <img src="assets/images/client-01.png" alt="2">--}}
{{--                        </div>--}}

{{--                        <div class="client-item">--}}
{{--                            <img src="assets/images/client-01.png" alt="3">--}}
{{--                        </div>--}}

{{--                        <div class="client-item">--}}
{{--                            <img src="assets/images/client-01.png" alt="4">--}}
{{--                        </div>--}}

{{--                        <div class="client-item">--}}
{{--                            <img src="assets/images/client-01.png" alt="5">--}}
{{--                        </div>--}}

{{--                        <div class="client-item">--}}
{{--                            <img src="assets/images/client-01.png" alt="6">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection
