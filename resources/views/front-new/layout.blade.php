<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
          rel="stylesheet">

    <title>Popsi Lageri</title>

    <link href="{{asset('css/homepage.css')}}" rel="stylesheet">
    <link rel="icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon"/>
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon"/>
    @yield('styles')

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-EP7E2GM9ZY"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-EP7E2GM9ZY');
    </script>
</head>

<body>

<!-- ***** Preloader Start ***** -->
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- ***** Preloader End ***** -->

<!-- Header -->
<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/"><h2>Popsi <em>Bearings</em></h2></a>
            {{--            <a class="navbar-brand" href="index.html">--}}
            {{--                <img height="70%" width="70%" id="logo" src="/img/logo.jpg">--}}
            {{--            </a>--}}
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item @if(Request::is('/')) active @endif">
                        <a class="nav-link" href="/">@lang('messages.home')</a>
                    </li>
                    <li class="nav-item @if(Request::is('products')) active @endif">
                        <a class="nav-link" href="/products">@lang('messages.catalogue')</a>
                    </li>
                    <li class="nav-item @if(Request::is('about')) active @endif">
                        <a class="nav-link" href="/about">@lang('messages.about-us-title')</a>
                    </li>
                    <li class="nav-item @if(Request::is('contact')) active @endif">
                        <a class="nav-link" href="/contact">@lang('messages.contact-single')</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            @if (app()->getLocale() == 'mk')
                                <img class="" src="{{asset('img/mk-flag.png')}}" alt="">
                            @else
                                <img class="" src="{{asset('img/en-flag.png')}}" alt="">
                            @endif
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                            <a class="dropdown-item" href="/changelocale/mk">Македонски</a>
                            <a class="dropdown-item" href="/changelocale/en">English</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>


@yield('content')

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner-content">
                    <p>Copyright &copy; {{ now()->format('Y') }} Popsi Company</p>
                    <p style="font-size: 10px;" class="text-light">
                        <a href="https://docs.google.com/viewer?url=http://lageri.mk/storage/documents/Privacy_Policy_Popsi.docx" target="_blank">
                            @lang('messages.cookie-policy')
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>


<script src="{{asset('js/homepage.js')}}"></script>
@yield('scripts')
</body>

</html>
