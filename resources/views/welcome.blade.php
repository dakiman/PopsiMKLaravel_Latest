<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>Document</title>

	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" href="{{asset('css/home.css')}}">

</head>

<body>

	<!-- Navigation -->
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top p-1 shadow">

		<div class="container-fluid">
			<a class="navbar-brand p-0 m-0" href="/">
				<img class="d-inline-block align-top " width="100px" height="63px" id="logo" src="/img/logo.jpg" alt="">
			</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
			 aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="about.html">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="services.html">Services</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contact.html">Contact</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Other Pages
						</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
							<a class="dropdown-item" href="full-width.html">Full Width Page</a>
							<a class="dropdown-item" href="sidebar.html">Sidebar Page</a>
							<a class="dropdown-item" href="faq.html">FAQ</a>
							<a class="dropdown-item" href="404.html">404</a>
							<a class="dropdown-item" href="pricing.html">Pricing Table</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<header class=" d-none d-sm-block">
		<div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
			<ol class="carousel-indicators ">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="carousel-item active" style="background-image: url('/img/carousel/banner4.jpg');"></div>
				<div class="carousel-item" style="background-image: url('/img/carousel/Banner-Bearing-LUAN-DUNG-JSC-LDC.jpg')"></div>
				<div class="carousel-item" style="background-image: url('/img/carousel/kms-banner.jpg')"> </div>
			</div>
		</div>
	</header>

	<!-- Page Content -->
	<div class="container-fluid ">
		<div class="row categories-container">
			<div class="col-md-11 text-center mx-auto mt-3">
				<div class="card-deck">
					<div class="card border mx-2 border-primary rounded">
						<img class="card-img-top mx-auto" src="http://lageri.mk/Images/codex15.bmp" alt="Card image cap">
						<div class="card-body text-center border border-bottom-0 border-left-0 border-right-0">
							<h5 class="card-title ">Card title</h5>
						</div>
					</div>
					<div class="card border mx-2 border-primary rounded">
						<img class="card-img-top mx-auto" src="http://lageri.mk/Images/codex5.bmp" alt="Card image cap">
						<div class="card-body text-center border border-bottom-0 border-left-0 border-right-0">
							<h5 class="card-title ">Card title</h5>
						</div>
					</div>
					<div class="card border mx-2 border-primary rounded">
						<img class="card-img-top mx-auto" src="http://lageri.mk/Images/codex25.bmp" alt="Card image cap">
						<div class="card-body text-center border border-bottom-0 border-left-0 border-right-0">
							<h5 class="card-title ">Card title</h5>
						</div>
					</div>
					<div class="card border mx-2 border-primary rounded">
						<img class="card-img-top mx-auto" src="http://lageri.mk/Images/codex4.bmp" alt="Card image cap">
						<div class="card-body text-center border border-bottom-0 border-left-0 border-right-0">
							<h5 class="card-title ">Card title</h5>
						</div>
					</div>
					<div class="card border mx-2 border-primary rounded">
						<img class="card-img-top mx-auto" src="http://lageri.mk/Images/codex15.bmp" alt="Card image cap">
						<div class="card-body text-center border border-bottom-0 border-left-0 border-right-0">
							<h5 class="card-title ">Card title</h5>
						</div>
					</div>
					<div class="card border mx-2 border-primary rounded">
						<img class="card-img-top mx-auto" src="http://lageri.mk/Images/codex15.bmp" alt="Card image cap">
						<div class="card-body text-center border border-bottom-0 border-left-0 border-right-0">
							<h5 class="card-title ">Card title</h5>
						</div>
					</div>
					<div class="card border mx-2 border-primary rounded">
						<img class="card-img-top mx-auto" src="http://lageri.mk/Images/codex15.bmp" alt="Card image cap">
						<div class="card-body text-center border border-bottom-0 border-left-0 border-right-0">
							<h5 class="card-title ">Card title</h5>
						</div>
					</div>
					<div class="card border mx-2 border-primary rounded">
						<img class="card-img-top mx-auto" src="http://lageri.mk/Images/codex15.bmp" alt="Card image cap">
						<div class="card-body text-center border border-bottom-0 border-left-0 border-right-0">
							<h5 class="card-title ">Card title</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-11 mx-auto mt-4">
				<div style="width:100%;" class="card">
					<div  class="card-header ">
            <div style="font-size: 30px;" class="text-primary font-weight-bold">Category Name</div>
            <hr>
            <div style="font-size: 20px;" class="pl-3 text-muted font-weight-italic ">	Изработени се по стандардни мерки и ознаки, издржливи се, отпорни и тестирани. Поради нивната голема трајност се намалуваат трошоците за одржување и овозможуваат непречено работење.</div>
					</div>
					<div class="card-body">
            <div class="row mx-auto">
              <div class="col-md-2 px-1 py-1">
                  <div class="card item-card border text-center border-muted rounded">
                      <img class="card-img-top" src="http://lageri.mk/Images/ExtremeBearings.gif" alt="Card image cap">
                      <div class="card-body text-center border border-bottom-0 border-left-0 border-right-0">
                        <h5 class="card-title ">Card title</h5>
                      </div>
                    </div>
              </div>
              <div class="col-md-2 px-1 py-1">
                  <div class="card item-card border text-center border-muted rounded">
                      <img class="card-img-top" src="http://lageri.mk/Images/ExtremeBearings.gif" alt="Card image cap">
                      <div class="card-body text-center border border-bottom-0 border-left-0 border-right-0">
                        <h5 class="card-title ">Card title</h5>
                      </div>
                    </div>
              </div>
              <div class="col-md-2 px-1 py-1">
                  <div class="card item-card border text-center border-muted rounded">
                      <img class="card-img-top" src="http://lageri.mk/Images/ExtremeBearings.gif" alt="Card image cap">
                      <div class="card-body text-center border border-bottom-0 border-left-0 border-right-0">
                        <h5 class="card-title ">Card title</h5>
                      </div>
                    </div>
              </div>
              <div class="col-md-2 px-1 py-1">
                  <div class="card item-card border text-center border-muted rounded">
                      <img class="card-img-top" src="http://lageri.mk/Images/ExtremeBearings.gif" alt="Card image cap">
                      <div class="card-body text-center border border-bottom-0 border-left-0 border-right-0">
                        <h5 class="card-title ">Card title</h5>
                      </div>
                    </div>
              </div>
              <div class="col-md-2 px-1 py-1">
                  <div class="card item-card border text-center border-muted rounded">
                      <img class="card-img-top" src="http://lageri.mk/Images/ExtremeBearings.gif" alt="Card image cap">
                      <div class="card-body text-center border border-bottom-0 border-left-0 border-right-0">
                        <h5 class="card-title ">Card title</h5>
                      </div>
                    </div>
              </div>
              <div class="col-md-2 px-1 py-1">
                  <div class="card item-card border text-center border-muted rounded">
                      <img class="card-img-top" src="http://lageri.mk/Images/ExtremeBearings.gif" alt="Card image cap">
                      <div class="card-body text-center border border-bottom-0 border-left-0 border-right-0">
                        <h5 class="card-title ">Card title</h5>
                      </div>
                    </div>
              </div>
              <div class="col-md-2 px-1 py-1">
                  <div class="card item-card border text-center border-muted rounded">
                      <img class="card-img-top" src="http://lageri.mk/Images/ExtremeBearings.gif" alt="Card image cap">
                      <div class="card-body text-center border border-bottom-0 border-left-0 border-right-0">
                        <h5 class="card-title ">Card title</h5>
                      </div>
                    </div>
              </div>
              <div class="col-md-2 px-1 py-1">
                  <div class="card item-card border text-center border-muted rounded">
                      <img class="card-img-top" src="http://lageri.mk/Images/ExtremeBearings.gif" alt="Card image cap">
                      <div class="card-body text-center border border-bottom-0 border-left-0 border-right-0">
                        <h5 class="card-title ">Card title</h5>
                      </div>
                    </div>
              </div>
              <div class="col-md-2 px-1 py-1">
                  <div class="card item-card border text-center border-muted rounded">
                      <img class="card-img-top" src="http://lageri.mk/Images/ExtremeBearings.gif" alt="Card image cap">
                      <div class="card-body text-center border border-bottom-0 border-left-0 border-right-0">
                        <h5 class="card-title ">Card title</h5>
                      </div>
                    </div>
              </div>
              <div class="col-md-2 px-1 py-1">
                  <div class="card item-card border text-center border-muted rounded">
                      <img class="card-img-top" src="http://lageri.mk/Images/ExtremeBearings.gif" alt="Card image cap">
                      <div class="card-body text-center border border-bottom-0 border-left-0 border-right-0">
                        <h5 class="card-title ">Card title</h5>
                      </div>
                    </div>
              </div>
              <div class="col-md-2 px-1 py-1">
                  <div class="card item-card border text-center border-muted rounded">
                      <img class="card-img-top" src="http://lageri.mk/Images/ExtremeBearings.gif" alt="Card image cap">
                      <div class="card-body text-center border border-bottom-0 border-left-0 border-right-0">
                        <h5 class="card-title ">Card title</h5>
                      </div>
                    </div>
              </div>
              <div class="col-md-2 px-1 py-1">
                  <div class="card item-card border text-center border-muted rounded">
                      <img class="card-img-top" src="http://lageri.mk/Images/ExtremeBearings.gif" alt="Card image cap">
                      <div class="card-body text-center border border-bottom-0 border-left-0 border-right-0">
                        <h5 class="card-title ">Card title</h5>
                      </div>
                    </div>
              </div>
              
            </div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- /.container -->
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<!-- Footer -->
	<footer class="py-3 bg-dark">
		<div class="container">
			<p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
		</div>
		<!-- /.container -->
	</footer>



	<script src="{{asset('js/app.js')}}"></script>
	<script>
		App.getHomeView();
	</script>

</body>

</html>