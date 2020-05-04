<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

<title>Masia Kan Cruz Category Flat Bootstrap Responsive Website Template | Home :: W3layouts</title>

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
		@if (Route::has('login'))
			<div class="top-right links">
				@auth
					<a href="{{ url('/home') }}">Home</a>
				@else
					<a href="{{ route('login') }}">Login</a>

					@if (Route::has('register'))
						<a href="{{ route('register') }}">Register</a>
					@endif
				@endauth
			</div>
		@endif

		<div class="content">
			<div class="title m-b-md">
				Laravel
			</div>

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
					<a class="navbar-brand agileits w3layouts" href="welcome.blade.php">Masia Kan Cruz</a>
				</div>

				<div id="navbar" class="navbar-collapse agileits w3layouts navbar-right collapse">
					<ul class="nav agileits w3layouts navbar-nav">
						<li class="active"><a href="index.html">HOME</a></li>
						<li><a href="about.html">ABOUT</a></li>
						<li><a href="cuisines.html">CUISINES</a></li>
						<li><a href="gallery.html">GALLERY</a></li>
						<li><a href="codes.html">CODES</a></li>
						<li><a href="{{ route('booking') }}">Booking</a></li>
					</ul>
				</div>

			</div>
		</nav>
		<!-- //Navbar -->



		<!-- Slider1 -->
		<div class="slider agileits w3layouts">
			<div class="slider-1 agileits w3layouts">
				<ul class="rslides agileits w3layouts" id="slider1">
				<li>
					<img src="images/masia_portada.jpg" alt="Agileits W3layouts">
					<div class="layer agileits w3layouts"></div>
					<div class="caption agileits w3layouts">
						<h3>Bienvenido a <span>Masia Kan Cruz</span></h3>
					</div>
				</li>
				<li>
					<img src="images/masia_portada2.jpg" alt="Agileits W3layouts">
					<div class="caption agileits w3layouts">
						<h3>Alojamiento rural</h3>
					</div>
				</li>
				<li>
					<img src="images/masia_portada3.jpg" alt="Agileits W3layouts">
					<div class="caption agileits w3layouts">
						<h3>Parque Natural Montseny</h3>
					</div>
				</li>
				<li>
					<img src="images/masia_portada4.jpg" alt="Agileits W3layouts">
					<div class="caption agileits w3layouts">
						<h3>En plena naturaleza</h3>
					</div>
				</li>
				<li>
					<img src="images/masia_portada5.jpg" alt="Agileits W3layouts">
					<div class="layer agileits w3layouts"></div>
					<div class="caption agileits w3layouts">
						<h3>Una experiencia única</h3>
					</div>
				</li>
			</ul>
			</div>
		</div>
		<!-- //Slider1 -->
		<div class="clearfix"></div>

	</div>
	<!-- //Header -->



	<!-- Projects -->
	<div class="projects agileits w3layouts">
		<div class="container">

			<div class="col-md-8 col-sm-8 projects-grid agileits w3layouts projects-grid1 wow slideInLeft">
				<!-- Slider2 -->
				<div class="slider-2 agileits w3layouts">
					<ul class="rslides agileits w3layouts" id="slider2">
						<li>
							<img src="images/project-1.jpg" alt="Agileits W3layouts">
						</li>
						<li>
							<img src="images/project-2.jpg" alt="Agileits W3layouts">
						</li>
						<li>
							<img src="images/project-3.jpg" alt="Agileits W3layouts">
						</li>
						<li>
							<img src="images/project-4.jpg" alt="Agileits W3layouts">
						</li>
						<li>
							<img src="images/project-5.jpg" alt="Agileits W3layouts">
						</li>
					</ul>
				</div>
				<!-- //Slider2 -->

				<!-- Slider3 -->
				<div class="slider-3 agileits w3layouts">
					<ul class="rslides agileits w3layouts" id="slider3">
						<li>
							<img src="images/project-6.jpg" alt="Agileits W3layouts">
						</li>
						<li>
							<img src="images/project-7.jpg" alt="Agileits W3layouts">
						</li>
						<li>
							<img src="images/project-8.jpg" alt="Agileits W3layouts">
						</li>
						<li>
							<img src="images/project-9.jpg" alt="Agileits W3layouts">
						</li>
						<li>
							<img src="images/project-10.jpg" alt="Agileits W3layouts">
						</li>
					</ul>
				</div>
				<!-- //Slider3 -->
			</div>

			<div class="col-md-4 col-sm-4 projects-grid agileits w3layouts projects-grid2 wow slideInRight">
				<h1>Featured Resorts</h1>
				<h4>BEST BEACH RESORTS</h4>
				<div class="h4-underline agileits w3layouts wow slideInLeft"></div>
				<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
				<a class="agileits w3layoutswow slideInLeft" href="gallery.html">Read More <span class="glyphicon agileits w3layouts glyphicon-arrow-right" aria-hidden="true"></span></a>
			</div>
			
		</div>
	</div>
	<!-- //Projects -->



	<!-- Awards -->
	<div class="awards agileits w3layouts">

		<h3>Our Awards</h3>

		<div class="awards-grids">
			<div class="col-md-3 col-sm-3 awards-grid agileits w3layouts awards-grid-1 wow fadeInUp">
				<img class="wow agileits w3layouts slideInLeft" src="images/award-1.png" alt="Agileits W3layouts">
				<h4>BEST HOSPITALITY</h4>
				<div class="h4-underline agileits w3layouts wow slideInLeft"></div>
				<p>Matthew Miller</p>
				<p>CEO</p>
				<p>Miami Resort</p>
			</div>
			<div class="col-md-3 col-sm-3 awards-grid awards-grid-2 wow agileits w3layouts fadeInUp">
				<img class="wow agileits w3layouts slideInLeft" src="images/award-2.png" alt="Agileits W3layouts">
				<h4>BEST LUXURY HOTEL</h4>
				<div class="h4-underline wow agileits w3layouts slideInLeft"></div>
				<p>Jared Lato</p>
				<p>Head, Management</p>
				<p>Hawaii Resort</p>
			</div>
			<div class="col-md-3 col-sm-3 agileits w3layouts awards-grid awards-grid-3 wow fadeInUp">
				<img class="wow agileits w3layouts slideInLeft" src="images/award-3.png" alt="Agileits W3layouts">
				<h4>BEST BEACH RESORT</h4>
				<div class="h4-underline wow agileits w3layouts slideInLeft"></div>
				<p>Sebastian Smith</p>
				<p>Head, Management</p>
				<p>Bahamas Resort</p>
			</div>
			<div class="col-md-3 col-sm-3 agileits w3layouts awards-grid awards-grid-4 wow fadeInUp">
				<img class="wow slideInLeft agileits w3layouts" src="images/award-4.png" alt="Agileits W3layouts">
				<h4>BEST SEAFOOD</h4>
				<div class="h4-underline wow agileits w3layouts slideInLeft"></div>
				<p>Matt Daniels</p>
				<p>Chef de Cuisine</p>
				<p>Ibiza Resort</p>
			</div>
			<div class="clearfix"></div>
		</div>

	</div>
	<!-- //Awards -->



	<!-- Services -->
	<div class="services agileits w3layouts">
		<div class="container">

			<div class="services-grids agileits w3layouts">
				<div class="col-md-6 col-sm-6 services-grid agileits w3layouts services-grid1 wow slideInLeft">
					<h2>Our Services</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, sunt in culpa qui officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
				</div>

				<div class="col-md-6 col-sm-6 services-grid agileits w3layouts services-grid2 wow slideInRight">
					<img src="images/services.jpg" alt="Agileits W3layouts">
				</div>
				<div class="clearfix"></div>
			</div>

			<div class="service-info-grids agileits w3layouts">
				<div class="col-md-4 col-sm-4 service-info agileits w3layouts service-info1 wow fadeInUp">
					<img src="images/service-icon-1.png" alt="Agileits W3layouts">
					<h4>REPREHENDERIT</h4>
					<div class="h4-underline wow agileits w3layouts slideInLeft"></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
					<a class="wow slideInLeft" href="about.html">Read More <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></a>
				</div>
				<div class="col-md-4 col-sm-4 agileits w3layouts service-info service-info2 wow fadeInUp">
					<img src="images/service-icon-2.png" alt="Agileits W3layouts">
					<h4>CILLUM DOLORE</h4>
					<div class="h4-underline wow agileits w3layouts slideInLeft"></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
					<a class="wow slideInLeft" href="about.html">Read More <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></a>
				</div>
				<div class="col-md-4 col-sm-4 service-info service-info3 agileits w3layouts wow fadeInUp">
					<img src="images/service-icon-3.png" alt="Agileits W3layouts">
					<h4>MAGNA ALIQUA</h4>
					<div class="h4-underline wow slideInLeft agileits w3layouts"></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
					<a class="wow slideInLeft" href="about.html">Read More <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></a>
				</div>
				<div class="clearfix"></div>
			</div>
			
		</div>
	</div>
	<!-- //Services -->



	<!-- Principles -->
	<div class="principles agileits w3layouts">
		<div class="container">

			<div class="col-md-6 col-sm-6 principles-grids principles-grids2 agileits w3layouts wow slideInRight">

				<h3>Customer Feedback</h3>

				<!-- Slider4 -->
				<div class="slider-4 agileits w3layouts">
					<ul class="rslides agileits w3layouts" id="slider4">
						<li>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<h4>John Doe</h4>
						</li>
						<li>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<h4>Jane Doe</h4>
						</li>
						<li>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<h4>Jack Doe</h4>
						</li>
						<li>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<h4>Jill Doe</h4>
						</li>
						<li>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<h4>James Doe</h4>
						</li>
					</ul>
				</div>
				<!-- //Slider4 -->
			</div>

			<div class="col-md-6 col-sm-6 principles-grids principles-grids1 agileits w3layouts wow slideInLeft">

				<h3>How We Work</h3>

				<div class="abt-btm agileits w3layouts">
					<div class="col-md-4 col-sm-4 agileits w3layouts bottom-gds">
						<div class="bott-img agileits w3layouts">
							<div class="icon-holder agileits w3layouts">
								<span class="glyphicon glyphicon-home agileits w3layouts icon" aria-hidden="true"></span>
							</div>
							<h4 class="mission agileits w3layouts">Accusantium</h4>
							<p class="description agileits w3layouts"><a href="about.html">Read More</a></p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 agileits w3layouts bottom-gds">
						<div class="bott-img agileits w3layouts">
							<div class="icon-holder agileits w3layouts">
								<span class="glyphicon glyphicon-user agileits w3layouts icon" aria-hidden="true"></span>
							</div>
							<h4 class="mission agileits w3layouts">Consequatur</h4>
							<p class="description agileits w3layouts"><a href="about.html">Read More</a></p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 agileits w3layouts bottom-gds">
						<div class="bott-img agileits w3layouts">
							<div class="icon-holder agileits w3layouts">
								<span class="glyphicon glyphicon-time agileits w3layouts icon" aria-hidden="true"></span>
							</div>
							<h4 class="mission agileits w3layouts">Reprehenderit</h4>
							<p class="description agileits w3layouts"><a href="about.html">Read More</a></p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 agileits w3layouts bottom-gds">
						<div class="bott-img agileits w3layouts">
							<div class="icon-holder agileits w3layouts">
								<span class="glyphicon agileits w3layouts glyphicon-star icon" aria-hidden="true"></span>
							</div>
							<h4 class="mission agileits w3layouts">Accusantium</h4>
							<p class="description agileits w3layouts"><a href="about.html">Read More</a></p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 agileits w3layouts bottom-gds">
						<div class="bott-img agileits w3layouts">
							<div class="icon-holder agileits w3layouts">
								<span class="glyphicon agileits w3layouts glyphicon-barcode icon" aria-hidden="true"></span>
							</div>
							<h4 class="mission agileits w3layouts">Exercitation</h4>
							<p class="description agileits w3layouts"><a href="about.html">Read More</a></p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 agileits w3layouts bottom-gds">
						<div class="bott-img agileits w3layouts">
							<div class="icon-holder agileits w3layouts">
								<span class="glyphicon agileits w3layouts glyphicon-tag icon" aria-hidden="true"></span>
							</div>
							<h4 class="mission agileits w3layouts">Non Proident</h4>
							<p class="description agileits w3layouts"><a href="about.html">Read More</a></p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>
			
		</div>
	</div>
	<!-- //Principles -->



	<!-- Footer -->
	<div class="footer agileits w3layouts">
		<div class="container">

			<div class="col-md-6 col-sm-6 agileits w3layouts footer-grids">
				<div class="col-md-4 col-sm-4 footer-grid agileits w3layouts footer-grid-1 wow fadeInUp">
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
				<div class="col-md-4 col-sm-4 footer-grid agileits w3layouts footer-grid-3 wow fadeInUp">
					<ul class="agileits w3layouts">
						<li class="agileits w3layouts"><a href="about.html">About</a></li>
						<li class="agileits w3layouts"><a href="cuisines.html">Cuisines</a></li>
						<li class="agileits w3layouts"><a href="gallery.html">Gallery</a></li>
						<li class="agileits w3layouts"><a href="booking.html">Contact</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>

			<div class="col-md-6 col-sm-6 footer-grids agileits w3layouts newsletter wow fadeInUp">
				<h4>Stay Connected</h4>
				<p>Subscribe to our newsletter and get informed of our newest projects.</p>
				<form action="#" method="post">
					<input type="text" placeholder="Email" name="Email" required="">
					<input type="submit" value="SUBSCRIBE">
				</form>
			</div>

			<div class="col-md-6 col-sm-6 footer-grids agileits w3layouts social wow fadeInUp">
				<ul class="social-icons">
					<li class="agileits w3layouts"><a href="#" class="facebook agileits w3layouts" title="Go to Our Facebook Page"></a></li>
					<li class="agileits w3layouts"><a href="#" class="twitter agileits w3layouts" title="Go to Our Twitter Account"></a></li>
					<li class="agileits w3layouts"><a href="#" class="googleplus agileits w3layouts" title="Go to Our Google Plus Account"></a></li>
					<li class="agileits w3layouts"><a href="#" class="instagram agileits w3layouts" title="Go to Our Instagram Account"></a></li>
					<li class="agileits w3layouts"><a href="#" class="youtube agileits w3layouts" title="Go to Our Youtube Channel"></a></li>
				</ul>
			</div>

			<div class="col-md-6 col-sm-6 footer-grids agileits w3layouts copyright wow fadeInUp">
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

		<!-- Slider-JavaScript -->
			<script src="js/responsiveslides.min.js"></script>
			<script>
				$(function () {
					$("#slider1, #slider2, #slider3, #slider4").responsiveSlides({
						auto: true,
						nav: true,
						speed: 1500,
						namespace: "callbacks",
						pager: true,
					});
				});
			</script>
		<!-- //Slider-JavaScript -->

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