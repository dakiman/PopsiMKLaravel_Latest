@extends('front-new.layout')
@section('content')
    <div class="find-us" style="margin-top: 0px!important;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Our Location on Maps</h2>
                    </div>
                </div>
                <div class="col-md-8">
                    <!-- How to change your own map point
                        1. Go to Google Maps
                        2. Click on your location point
                        3. Click "Share" and choose "Embed map" tab
                        4. Copy only URL and paste it within the src="" field below
                    -->
                    <div id="map">
                        <div class="map-box">
                            <iframe width="100%" height="330px" frameborder="0" style="border:0"
                                    src="https://www.google.com/maps/embed/v1/place?q=popsi%20mk&key=AIzaSyDIG6UNz_JspNeBuQEHZSr5CIcvFXoxRmY"
                                    allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="left-content">
                        <h4>@lang('messages.contact-single')</h4>
                        <ul>
                            <li>@lang('messages.email')</li>
                            <li>@lang('messages.phone')</li>
                            <li>@lang('messages.mobile')</li>
                            <br>
                            <li>@lang('messages.address')</li>
                        </ul>
                        <p></p>
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

    <div class="team-members">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>@lang('messages.our-team')</h2>
                    </div>
                </div>
                <div class="col-md-5 offset-md-1">
                    <div class="team-member">
                        <div class="thumb-container">
                            <img src="assets/images/team_01.jpg" alt="">
                            <div class="hover-effect">
                                <div class="hover-content">
                                    <ul class="social-icons">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="down-content">
                            <h4>@lang('messages.aleksandar')</h4>
                            <span>@lang('messages.CEO')</span>
{{--                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing itaque corporis nulla.</p>--}}
                            <ul>
                                <li>tel: +389 (0)2 2460 480</li>
                                <li>fax: +389 (0)2 2403 348</li>
                                <li>mob: +389 (0)71 279 219</li>
                                <li>e-mail: popsicom@t.mk</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="team-member">
                        <div class="thumb-container">
                            <img src="assets/images/team_01.jpg" alt="">
                            <div class="hover-effect">
                                <div class="hover-content">
                                    <ul class="social-icons">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="down-content">
                            <h4>@lang('messages.vladimir')</h4>
                            <span>@lang('messages.CFO')</span>
{{--                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing itaque corporis nulla.</p>--}}
                            <ul>
                                <li>tel/fax: +389 (0)2 2460 316</li>
                                <li>e-mail: vladimir.p@popsibearings.com.mk</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="send-message">
{{--        {{ session('message') }}--}}
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>@lang('messages.contact-greeting')</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-form">
                        <form id="contact" action="/contact" method="post">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="name" type="text" class="form-control" id="name"
                                               placeholder="@lang("messages.full-name")" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="email" type="text" class="form-control" id="email"
                                               placeholder="E-Mail" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="body" rows="6" class="form-control" id="message"
                                                  placeholder="@lang('messages.your-message')" required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="filled-button">@lang('messages.send-message')</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <ul class="accordion">--}}
{{--                        <li>--}}
{{--                            <a>Accordion Title One</a>--}}
{{--                            <div class="content">--}}
{{--                                <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester--}}
{{--                                    consectetur similiqu consectetur.<br><br>Lorem ipsum dolor sit amet, consectetur--}}
{{--                                    adipisic elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti--}}
{{--                                    elite.</p>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a>Second Title Here</a>--}}
{{--                            <div class="content">--}}
{{--                                <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester--}}
{{--                                    consectetur similiqu consectetur.<br><br>Lorem ipsum dolor sit amet, consectetur--}}
{{--                                    adipisic elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti--}}
{{--                                    elite.</p>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a>Accordion Title Three</a>--}}
{{--                            <div class="content">--}}
{{--                                <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester--}}
{{--                                    consectetur similiqu consectetur.<br><br>Lorem ipsum dolor sit amet, consectetur--}}
{{--                                    adipisic elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti--}}
{{--                                    elite.</p>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a>Fourth Accordion Title</a>--}}
{{--                            <div class="content">--}}
{{--                                <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester--}}
{{--                                    consectetur similiqu consectetur.<br><br>Lorem ipsum dolor sit amet, consectetur--}}
{{--                                    adipisic elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti--}}
{{--                                    elite.</p>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>

@endsection
