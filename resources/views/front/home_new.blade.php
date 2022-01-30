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
    <link rel="icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon" />
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon" />
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
            <a class="navbar-brand" href="index.html"><h2>Popsi <em>Bearings</em></h2></a>
{{--            <a class="navbar-brand" href="index.html">--}}
{{--                <img height="70%" width="70%" id="logo" src="/img/logo.jpg">--}}
{{--            </a>--}}
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products.html">Our Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<!-- Page Content -->
<!-- Banner Starts Here -->
<div class="banner header-text">
    <div class="owl-banner owl-carousel">
        @foreach ($pictures as $picture)
            <div class="banner-item" style="background-image: url({{Storage::url('/carousel/' . $picture )}})">
                <div class="text-content">
                    <h4>Best Offer</h4>
                    <h2>New Arrivals On Sale</h2>
                </div>
            </div>
        @endforeach
    </div>
</div>

<div class="products">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="filters">
                    <ul>
                        @foreach($categories as $category)
                            <li data-filter=".{{Str::slug($category->title_en)}}">{{$category->translateTitle()}}</li> |
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-12">
                <div class="filters-content">
                    <div class="row grid">
                        @foreach($categories as $category)
                            @foreach($category->activeItems() as $item)
                                <div class="col-lg-4 col-md-4 all {{Str::slug($category->title_en)}}">
                                    <div class="product-item text-center">
                                        <a href="#"><img class="item-img" src="{{ Storage::url('items/' . $item->getCoverPhoto() )}}"
                                                         alt=""></a>
                                        <div class="down-content">
                                            <a href="#"><h4 class="item-title">{{$item->translateTitle()}}</h4></a>
                                            <p class="item-description">{{ $item->translateDescription() }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endforeach
                    </div>
                </div>
            </div>
{{--            <div class="col-md-12">--}}
{{--                <ul class="pages">--}}
{{--                    <li><a href="#">1</a></li>--}}
{{--                    <li class="active"><a href="#">2</a></li>--}}
{{--                    <li><a href="#">3</a></li>--}}
{{--                    <li><a href="#">4</a></li>--}}
{{--                    <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
        </div>
    </div>
</div>

<div class="best-features">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>About Sixteen Clothing</h2>
                </div>
            </div>
            <div class="col-md-6">
                <div class="left-content">
                    <h4>Looking for the best products?</h4>
                    <p><a rel="nofollow" href="https://templatemo.com/tm-546-sixteen-clothing" target="_parent">This
                            template</a> is free to use for your business websites. However, you have no permission to
                        redistribute the downloadable ZIP file on any template collection website. <a rel="nofollow"
                                                                                                      href="https://templatemo.com/contact">Contact
                            us</a> for more info.</p>
                    <ul class="featured-list">
                        <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                        <li><a href="#">Consectetur an adipisicing elit</a></li>
                        <li><a href="#">It aquecorporis nulla aspernatur</a></li>
                        <li><a href="#">Corporis, omnis doloremque</a></li>
                        <li><a href="#">Non cum id reprehenderit</a></li>
                    </ul>
                    <a href="about.html" class="filled-button">Read More</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="right-image">
                    <img src="assets/{{asset("images/feature-image.jpg")}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>


<div class="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner-content">
                    <div class="row">
                        <div class="col-md-8">
                            <h4>Creative &amp; Unique <em>Sixteen</em> Products</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis amet elite
                                author nulla.</p>
                        </div>
                        <div class="col-md-4">
                            <a href="#" class="filled-button">Purchase Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner-content">
                    <p>Copyright &copy; 2020 Sixteen Clothing Co., Ltd.

                        - Design: <a rel="nofollow noopener" href="https://templatemo.com"
                                     target="_blank">TemplateMo</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>


<script src="{{asset('js/homepage.js')}}"></script>

{{--<script language = "text/Javascript">--}}
{{--    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field--}}
{{--    function clearField(t) {                   //declaring the array outside of the--}}
{{--        if (!cleared[t.id]) {                      // function makes it static and global--}}
{{--            cleared[t.id] = 1;  // you could use true and false, but that's more typing--}}
{{--            t.value = '';         // with more chance of typos--}}
{{--            t.style.color = '#fff';--}}
{{--        }--}}
{{--    }--}}
{{--</script>--}}


</body>

</html>
