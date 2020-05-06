<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	
<head>

<title>Masia Can Cruz Category Flat Bootstrap Responsive Website Template | Home :: W3layouts</title>

<!-- Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Tropical Resorts a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Meta-Tags -->

<!-- Custom-Stylesheet-Links -->
<!-- Bootstrap-CSS --> 	<link rel="stylesheet" href="css/bootstrap.min.css"	type="text/css" media="all">
<!-- Index-Page-CSS --> <link rel="stylesheet" href="css/style.css" 		type="text/css" media="all">
<!-- Animate.CSS --> 	<link rel="stylesheet" href="css/animate.css" 		type="text/css" media="all">
<!-- //Custom-Stylesheet-Links -->

<!-- Fonts -->
<!-- Body-Font -->	 <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" type="text/css">
<!-- Logo-Font -->	 <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Cinzel+Decorative:400,900,700" type="text/css">
<!-- Navbar-Font --> <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700"			   type="text/css">
<!-- //Fonts -->

</head>
<!-- //Head -->



<!-- Body -->
<body>
	<div class="flex-center position-ref full-height">

	<!-- Header -->
	<div class="header agileits w3layouts" id="home">

		<!-- Navbar -->
		<nav class="navbar navbar-default w3l aits wow bounceInUp agileits w3layouts">
			<div class="container">

				<div class="navbar-header agileits w3layouts">
					<button type="button" class="navbar-toggle agileits w3layouts collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
						<span class="sr-only agileits w3layouts">Toggle navigation</span>
						<span class="icon-bar w3l"></span>
						<span class="icon-bar aits"></span>
						<span class="icon-bar w3laits"></span>
					</button>
					<a class="navbar-brand agileits w3layouts" href="welcome.blade.php">Masia Can Cruz</a>
				</div>

				<div id="navbar" class="navbar-collapse agileits w3layouts navbar-right collapse">
					<ul class="nav agileits w3layouts navbar-nav">
						<li class="active"><a href="#">Inicio</a></li>
						<li><a href="{{route ('room')}}">Habitaciones</a></li>
						<li><a href="{{route ('gallery')}}">Galeria</a></li>
						<li><a href="{{route ('booking')}}">Reservas</a></li>
					@if (Route::has('login'))
						@auth
							<li><a href="{{ url('/home') }}">Home</a></li>
						@else
							<li><a href="{{ route('login') }}">Iniciar sesión</a></li>

						@if (Route::has('register'))
								<li><a href="{{ route('register') }}">Registrate</a></li>
						@endif
						@endauth
					@endif
					</ul>
				</div>

			</div>
		</nav>
		<!-- //Navbar -->



		<!-- Banner -->
		<div class="banner agileits w3layouts">
			<img src="images/banner.jpg" alt="Agileits W3layouts">
			<h1 class="wow agileits w3layouts fadeInDown">GALLERY</h1>
		</div>
		<!-- //Banner -->

	</div>
	<!-- //Header -->



	<!-- Rooms -->
	<div class="rooms agileits w3layouts">
		<div class="container">

			<h2>We Provide The Best Hospitality</h2>

			<div class="rooms-grids agileits w3layouts">
				<div class="rooms-grid agileits w3layouts rooms-grid-1 wow fadeInRight">
					<img src="images/room-1.jpg" alt="Agileits W3layouts">
					<h3>STAR HOTELS</h3>
				</div>
				<div class="rooms-grid rooms-grid-2 agileits w3layouts wow fadeInLeft">
					<img src="images/room-2.jpg" alt="Agileits W3layouts">
					<h3>BEACH RESORTS</h3>
				</div>
				<div class="rooms-grid rooms-grid-3 wow fadeInRight agileits w3layouts">
					<img src="images/room-3.jpg" alt="Agileits W3layouts">
					<h3>BEACH HOUSES</h3>
				</div>
				<div class="rooms-grid rooms-grid-4 wow agileits w3layouts fadeInLeft">
					<img src="images/room-4.jpg" alt="Agileits W3layouts">
					<h3>WATER HOUSES</h3>
				</div>
			</div>

		</div>
	</div>
	<!-- Rooms -->



	<!-- Portfolio -->
	<div class="portfolio agileits w3layouts">

		<div class="ga-top agileits w3layouts">

			<div class="col-md-3 col-sm-3 agileits w3layouts portfolio-top">

				<div class="portfolio-item agileits w3layouts wow zoomIn">
					<a class="example-image-link agileits w3layouts" href="images/project-1.jpg" data-lightbox="example-set" data-title="">
						<div class="grid agileits w3layouts">
							<figure class="effect-apollo agileits w3layouts">
								<img src="images/gallery-1.jpg" alt="Agileits W3layouts">
									<figcaption></figcaption>
							</figure>
						</div>
					</a>
				</div>

				<div class="portfolio-item wow agileits w3layouts zoomIn">
					<a class="example-image-link agileits w3layouts" href="images/project-2.jpg" data-lightbox="example-set" data-title="">
						<div class="grid agileits w3layouts">
							<figure class="effect-apollo agileits w3layouts">
								<img src="images/gallery-2.jpg" alt="Agileits W3layouts">
									<figcaption></figcaption>
							</figure>
						</div>
					</a>
				</div>
				<div class="clearfix"></div>

			</div>

			<div class="col-md-3 col-sm-3 agileits w3layouts portfolio-top">

				<div class="portfolio-item wow agileits w3layouts zoomIn">
					<a class="example-image-link agileits w3layouts" href="images/project-3.jpg" data-lightbox="example-set" data-title="">
						<div class="grid agileits w3layouts">
							<figure class="effect-apollo agileits w3layouts">
								<img src="images/gallery-3.jpg" alt="Agileits W3layouts">
									<figcaption></figcaption>
							</figure>
						</div>
					</a>
				</div>

				<div class="portfolio-item agileits w3layouts wow zoomIn">
					<a class="example-image-link agileits w3layouts" href="images/project-4.jpg" data-lightbox="example-set" data-title="">
						<div class="grid agileits w3layouts">
							<figure class="effect-apollo agileits w3layouts">
								<img src="images/gallery-4.jpg" alt="Agileits W3layouts">
									<figcaption></figcaption>
							</figure>
						</div>
					</a>
				</div>

				<div class="portfolio-item wow agileits w3layouts zoomIn">
					<a class="example-image-link agileits w3layouts" href="images/project-5.jpg" data-lightbox="example-set" data-title="">
						<div class="grid agileits w3layouts">
							<figure class="effect-apollo agileits w3layouts">
								<img src="images/gallery-5.jpg" alt="Agileits W3layouts">
									<figcaption></figcaption>
							</figure>
						</div>
					</a>
				</div>
				<div class="clearfix"></div>

			</div>

			<div class="col-md-3 col-sm-3 agileits w3layouts portfolio-top">

				<div class="portfolio-item agileits w3layouts wow zoomIn">
					<a class="example-image-link agileits w3layouts" href="images/project-6.jpg" data-lightbox="example-set" data-title="">
						<div class="grid agileits w3layouts">
							<figure class="effect-apollo agileits w3layouts">
								<img src="images/gallery-6.jpg" alt="Agileits W3layouts">
									<figcaption></figcaption>
							</figure>
						</div>
					</a>
				</div>

				<div class="portfolio-item agileits w3layouts wow zoomIn">
					<a class="example-image-link agileits w3layouts" href="images/project-7.jpg" data-lightbox="example-set" data-title="">
						<div class="grid agileits w3layouts">
							<figure class="effect-apollo agileits w3layouts">
								<img src="images/gallery-7.jpg" alt="Agileits W3layouts">
									<figcaption></figcaption>
							</figure>
						</div>
					</a>
				</div>
				<div class="clearfix"></div>

			</div>

			<div class="col-md-3 col-sm-3 agileits w3layouts portfolio-top">

				<div class="portfolio-item wow agileits w3layouts zoomIn">
					<a class="example-image-link agileits w3layouts" href="images/project-8.jpg" data-lightbox="example-set" data-title="">
						<div class="grid agileits w3layouts">
							<figure class="effect-apollo agileits w3layouts">
								<img src="images/gallery-8.jpg" alt="Agileits W3layouts">
									<figcaption></figcaption>
							</figure>
						</div>
					</a>
				</div>

				<div class="portfolio-item wow agileits w3layouts zoomIn">
					<a class="example-image-link agileits w3layouts" href="images/project-9.jpg" data-lightbox="example-set" data-title="">
						<div class="grid agileits w3layouts">
							<figure class="effect-apollo agileits w3layouts">
								<img src="images/gallery-9.jpg" alt="Agileits W3layouts">
									<figcaption></figcaption>
							</figure>
						</div>
					</a>
				</div>

				<div class="portfolio-item wow agileits w3layouts zoomIn">
					<a class="example-image-link agileits w3layouts" href="images/project-10.jpg" data-lightbox="example-set" data-title="">
						<div class="grid agileits w3layouts">
							<figure class="effect-apollo agileits w3layouts">
								<img src="images/gallery-10.jpg" alt="Agileits W3layouts">
									<figcaption></figcaption>
							</figure>
						</div>
					</a>
				</div>
				<div class="clearfix"></div>

			</div>

			<div class="clearfix"></div>

		</div> 

	</div>
	<!-- //Portfolio -->



	<!-- Footer -->
	<div class="footer agileits w3layouts">
		<div class="container">

			<div class="col-md-6 col-sm-6 agileits w3layouts footer-grids">
				<div class="col-md-4 col-sm-4 agileits w3layouts footer-grid footer-grid-1 wow fadeInUp">
					<ul class="agileits w3layouts">
						<li class="agileits w3layouts">5 Star Hotels</li>
						<li class="agileits w3layouts">Beach Resorts</li>
						<li class="agileits w3layouts">Beach Houses</li>
						<li class="agileits w3layouts">Water Houses</li>
					</ul>
				</div>
				<div class="col-md-4 col-sm-4 footer-grid agileits w3layouts footer-grid-2 wow fadeInUp">
					<ul class="agileits w3layouts">
						<li class="agileits w3layouts"><a href="gallery.html">Bahamas</a></li>
						<li class="agileits w3layouts"><a href="gallery.html">Hawaii</a></li>
						<li class="agileits w3layouts"><a href="gallery.html">Miami</a></li>
						<li class="agileits w3layouts"><a href="gallery.html">Ibiza</a></li>
					</ul>
				</div>
				<div class="col-md-4 col-sm-4 footer-grid footer-grid-2 agileits w3layouts wow fadeInUp">
					<ul class="agileits w3layouts">
						<li class="agileits w3layouts"><a href="index.html">Home</a></li>
						<li class="agileits w3layouts"><a href="about.html">About</a></li>
						<li class="agileits w3layouts"><a href="cuisines.html">Cuisines</a></li>
						<li class="agileits w3layouts"><a href="booking.html">Contact</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>

			<div class="col-md-6 col-sm-6 agileits w3layouts footer-grids newsletter wow fadeInUp">
				<h4>Stay Connected</h4>
				<p>Subscribe to our newsletter and get informed of our newest projects.</p>
				<form action="#" method="post">
					<input type="text" placeholder="Email" name="Email" required="">
					<input type="submit" value="SUBSCRIBE">
				</form>
			</div>

			<div class="col-md-6 col-sm-6 footer-grids agileits w3layouts social wow fadeInUp">
				<ul class="social-icons agileits w3layouts">
					<li class="agileits w3layouts"><a href="#" class="facebook agileits w3layouts" title="Go to Our Facebook Page"></a></li>
					<li class="agileits w3layouts"><a href="#" class="twitter agileits w3layouts" title="Go to Our Twitter Account"></a></li>
					<li class="agileits w3layouts"><a href="#" class="googleplus agileits w3layouts" title="Go to Our Google Plus Account"></a></li>
					<li class="agileits w3layouts"><a href="#" class="instagram agileits w3layouts" title="Go to Our Instagram Account"></a></li>
					<li class="agileits w3layouts"><a href="#" class="youtube agileits w3layouts" title="Go to Our Youtube Channel"></a></li>
				</ul>
			</div>

			<div class="col-md-6 col-sm-6 footer-grids copyright agileits w3layouts wow fadeInUp">
				<p>&copy; 2017 Tropical Resorts. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank"> W3layouts </a></p>
			</div>
			<div class="clearfix"></div>
			
		</div>
	</div>
	<!-- //Footer -->



	<!-- Custom-JavaScript-File-Links -->

		<!-- Default-JavaScript -->	  <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		<!-- Bootstrap-JavaScript --> <script type="text/javascript" src="js/bootstrap.min.js"></script>

		<!-- Animate.CSS-JavaScript -->
			<script src="js/wow.min.js"></script>
				<script>
					new WOW().init();
				</script>
		<!-- //Animate.CSS-JavaScript -->

		<!-- Portfolio-Popup-Box-JavaScript -->
			<script src="js/modernizr.custom.97074.js"></script>
			<script src="js/jquery.chocolat.js"></script>
			<script type="text/javascript">
				$(function() {
					$('.portfolio-item a').Chocolat();
				});
			</script>
		<!-- //Portfolio-Popup-Box-JavaScript -->

		<!-- Slide-To-Top JavaScript (No-Need-To-Change) -->
			<script type="text/javascript">
				$(document).ready(function() {
					var defaults = {
						containerID: 'toTop', // fading element id
						containerHoverID: 'toTopHover', // fading element hover id
						scrollSpeed: 100,
						easingType: 'linear'
					};
					$().UItoTop({ easingType: 'easeOutQuart' });
				});
			</script>
			<a href="#" id="toTop" class="agileits w3layouts" style="display: block;"> <span id="toTopHover" style="opacity: 0;"> </span></a>
		<!-- //Slide-To-Top JavaScript -->

		<!-- Smooth-Scrolling-JavaScript -->
			<script type="text/javascript" src="js/move-top.js"></script>
			<script type="text/javascript" src="js/easing.js"></script>
			<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll, .navbar li a, .footer li a").click(function(event){
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
			</script>
		<!-- //Smooth-Scrolling-JavaScript -->

	<!-- //Custom-JavaScript-File-Links -->

</body>
<!-- //Body -->

</html>
