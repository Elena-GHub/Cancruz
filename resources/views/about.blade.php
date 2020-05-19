@extends('layouts.app')
@section('title','about')
@section('content')

<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<head>

<title>Tropical Resorts a Hotels and Restaurants Category Flat Bootstrap Responsive Website Template | About :: W3layouts</title>

<!-- Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Tropical Resorts a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Meta-Tags -->

<!-- Custom-Stylesheet-Links -->
<!-- Bootstrap-CSS --> 	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all">
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

	<!-- Header -->
	<div class="header agileits w3layouts" id="home">

		<!-- Navbar -->
		<nav class="navbar navbar-default agileits w3layouts inner-pages-navbar wow bounceInUp">
			<div class="container">

				<div class="navbar-header agileits w3layouts">
					<button type="button" class="navbar-toggle agileits w3layouts collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
						<span class="sr-only agileits w3layouts">Toggle navigation</span>
						<span class="icon-bar agileits w3layouts"></span>
						<span class="icon-bar agileits w3layouts"></span>
						<span class="icon-bar agileits w3layouts"></span>
					</button>
					<a class="navbar-brand agileits w3layouts" href="{{ url('/') }}">Tropical Resorts</a>
				</div>

				<div id="navbar" class="navbar-collapse agileits w3layouts navbar-right collapse">
					<ul class="nav navbar-nav agileits w3layouts">
                        <li class="active"><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('cuisines') }}">Cuisines</a></li>
                        <li><a href="{{ route('gallery') }}">Gallery</a></li>
                        <li><a href="{{ route('codes') }}">Codes</a></li>
                        <li><a href="{{ route('booking') }}">Booking</a></li>
					</ul>
				</div>

			</div>
		</nav>
		<!-- //Navbar -->


		<!-- Banner -->
		<div class="banner agileits w3layouts">
			<img src="images/banner.jpg" alt="Agileits W3layouts">
			<h1 class="wow agileits w3layouts fadeInDown">ABOUT</h1>
		</div>
		<!-- //Banner -->

	</div>
	<!-- //Header -->



	<!-- Gallery -->
	<div class="gallery agileits w3layouts">
		<div class="container">

			<h2>Our Latest Project</h2>

			<div class="col-md-6 col-sm-6 gallery-grids agileits w3layouts gallery-grids1 wow slideInLeft">
				<div class="gallery-grid-images agileits w3layouts">
					<div class="col-md-4 col-sm-4 gallery-grid agileits w3layouts gallery-grid-1">
						<img src="images/project-1.jpg" alt="Agileits W3layouts">
					</div>
					<div class="col-md-4 col-sm-4 gallery-grid agileits w3layouts gallery-grid-2">
						<img src="images/project-3.jpg" alt="Agileits W3layouts">
					</div>
					<div class="col-md-4 col-sm-4 gallery-grid agileits w3layouts gallery-grid-3">
						<img src="images/project-5.jpg" alt="Agileits W3layouts">
					</div>
					<div class="col-md-4 col-sm-4 gallery-grid agileits w3layouts gallery-grid-4">
						<img src="images/project-6.jpg" alt="Agileits W3layouts">
					</div>
					<div class="col-md-4 col-sm-4 gallery-grid agileits w3layouts gallery-grid-5">
						<img src="images/project-7.jpg" alt="Agileits W3layouts">
					</div>
					<div class="col-md-4 col-sm-4 gallery-grid agileits w3layouts gallery-grid-6">
						<img src="images/project-8.jpg" alt="Agileits W3layouts">
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="gallery-grid-info wow agileits w3layouts fadeInLeft">
					<h3>The Exotica</h3>
					<h4>Richmond Beach</h4>
					<h5>Miami, FL</h5>
				</div>
			</div>

			<div class="col-md-6 col-sm-6 gallery-grids agileits w3layouts gallery-grids2 wow slideInRight">
				<img src="images/gallery.jpg" alt="Agileits W3layouts">
			</div>
			<div class="clearfix"></div>

		</div>
	</div>
	<!-- //Gallery -->



	<!-- Details -->
	<div class="details agileits w3layouts">
		<div class="container">

			<h3>Details</h3>

			<div class="details-grids agileits w3layouts">
				<div class="col-md-4 col-sm-4 details-grid agileits w3layouts details-grid-1 wow slideInUp">
					<div class=" details-grid1 agileits w3layouts">
						<div class="details-grid-image agileits w3layouts">
							<img src="images/project-1.jpg" alt="Agileits W3layouts">
						</div>
						<div class="details-grid-info agileits w3layouts">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod	tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam.</p>
						</div>
						<button class="btn btn-primary wow agileits w3layouts fadeInLeft" data-toggle="modal" data-target="#myModal">EXPLORE<span class="glyphicon agileits w3layouts glyphicon-arrow-right" aria-hidden="true"></span></button>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 details-grid details-grid-2 wow agileits w3layouts slideInUp">
					<div class="details-grid2 agileits w3layouts">
						<div class="details-grid-image agileits w3layouts">
							<img src="images/project-6.jpg" alt="Agileits W3layouts">
						</div>
						<div class="details-grid-info agileits w3layouts">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod	tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam.</p>
						</div>
						<button class="btn btn-primary wow agileits w3layouts fadeInLeft" data-toggle="modal" data-target="#myModal2">EXPLORE<span class="glyphicon agileits w3layouts glyphicon-arrow-right" aria-hidden="true"></span></button>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 details-grid agileits w3layouts details-grid-3 wow slideInUp">
					<div class="details-grid3 agileits w3layouts">
						<div class="details-grid-image agileits w3layouts">
							<img src="images/project-7.jpg" alt="Agileits W3layouts">
						</div>
						<div class="details-grid-info agileits w3layouts">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod	tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam.</p>
						</div>
						<button class="btn btn-primary agileits w3layouts wow fadeInLeft" data-toggle="modal" data-target="#myModal3">EXPLORE<span class="glyphicon agileits w3layouts glyphicon-arrow-right" aria-hidden="true"></span></button>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>

			<!-- Tooltip-Content -->
			<div class="tooltip-content agileits w3layouts">

				<div class="modal fade agileits w3layouts details-modal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog agileits w3layouts modal-lg">
						<div class="modal-content agileits w3layouts">
							<div class="modal-header agileits w3layouts">
								<button type="button" class="close agileits w3layouts" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title agileits w3layouts">LOREM IPSUM</h4>
							</div>
							<div class="modal-body agileits w3layouts">
								<img src="images/project-1.jpg" alt="Agileits W3layouts">
								<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
							</div>
						</div>
					</div>
				</div>

				<div class="modal fade agileits w3layouts details-modal" id="myModal2" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog modal-lg agileits w3layouts">
						<div class="modal-content agileits w3layouts">
							<div class="modal-header agileits w3layouts">
								<button type="button" class="close agileits w3layouts" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title agileits w3layouts">LOREM IPSUM</h4>
							</div>
							<div class="modal-body agileits w3layouts">
								<img src="images/project-6.jpg" alt="Agileits W3layouts">
								<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
							</div>
						</div>
					</div>
				</div>

				<div class="modal fade details-modal agileits w3layouts" id="myModal3" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog modal-lg agileits w3layouts">
						<div class="modal-content agileits w3layouts">
							<div class="modal-header agileits w3layouts">
								<button type="button" class="close agileits w3layouts" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title agileits w3layouts">LOREM IPSUM</h4>
							</div>
							<div class="modal-body agileits w3layouts">
								<img src="images/project-7.jpg" alt="Agileits W3layouts">
								<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
							</div>
						</div>
					</div>
				</div>

				<script>
					$('#myModal').modal('');
				</script>

			</div>
			<!-- //Tooltip-Content -->

		</div>
	</div>
	<!-- //Details -->



	<!-- Ventures -->
	<div class="ventures agileits w3layouts">
		<div class="container">

			<h3>Our Latest Ventures</h3>

			<div class="ventures-grids agileits w3layouts">
				<div class="col-md-3 col-sm-3 ventures-grid agileits w3layouts ventures-grid1 ventures-grid-image wow slideInUp">
					<img src="images/project-5.jpg" alt="Agileits W3layouts">
				</div>
				<div class="col-md-3 col-sm-3 ventures-grid agileits w3layouts ventures-grid2 ventures-grid-info wow slideInUp">
					<h4>Lorem Ipsum Dolores</h4>
					<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
				</div>
				<div class="col-md-3 col-sm-3 ventures-grid agileits w3layouts ventures-grid3 ventures-grid-image wow slideInUp">
					<img src="images/project-8.jpg" alt="Agileits W3layouts">
				</div>
				<div class="col-md-3 col-sm-3 ventures-grid agileits w3layouts ventures-grid4 ventures-grid-info wow slideInUp">
					<h4>Sitamet Consectetur</h4>
					<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
				</div>
				<div class="col-md-3 col-sm-3 ventures-grid agileits w3layouts ventures-grid5 ventures-grid-image wow slideInUp">
					<img src="images/project-9.jpg" alt="Agileits W3layouts">
				</div>
				<div class="col-md-3 col-sm-3 ventures-grid agileits w3layouts ventures-grid6 ventures-grid-info wow slideInUp">
					<h4>Adipiscing Elit Num</h4>
					<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
				</div>
				<div class="col-md-3 col-sm-3 ventures-grid agileits w3layouts ventures-grid7 ventures-grid-image wow slideInUp">
					<img src="images/project-10.jpg" alt="Agileits W3layouts">
				</div>
				<div class="col-md-3 col-sm-3 ventures-grid agileits w3layouts ventures-grid8 ventures-grid-info wow slideInUp">
					<h4>Ased eiusmod tempor</h4>
					<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
				</div>
				<div class="clearfix"></div>
			</div>

		</div>
	</div>
	<!-- //Ventures -->



	<!-- Team -->
	<div class="team agileits w3layouts">
		<div class="container">

			<h3>Behind Our Success</h3>

			<div class="team-grids agileits w3layouts grid">
				<div class="col-md-4 col-sm-4 team-grid agileits w3layouts team-grid1 wow slideInUp">
					<figure class="effect-zoe agileits w3layouts">
						<img src="images/team-1.jpg" alt="Agileits W3layouts"/>
						<figcaption>
							<h4>John <span>Doe</span></h4>
							<ul class="social-icons agileits w3layouts">
								<li><a href="#" class="facebook agileits w3layouts" title="Go to Our Facebook Page"></a></li>
								<li><a href="#" class="twitter agileits w3layouts" title="Go to Our Twitter Account"></a></li>
								<li><a href="#" class="googleplus agileits w3layouts" title="Go to Our Google Plus Account"></a></li>
								<li><a href="#" class="instagram agileits w3layouts" title="Go to Our Instagram Account"></a></li>
							</ul>
							<p class="description agileits w3layouts">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
						</figcaption>
					</figure>
				</div>
				<div class="col-md-4 col-sm-4 team-grid agileits w3layouts team-grid2 wow slideInUp">
					<figure class="effect-zoe agileits w3layouts">
						<img src="images/team-2.jpg" alt="Agileits W3layouts"/>
						<figcaption>
							<h4>Jane <span>Doe</span></h4>
							<ul class="social-icons agileits w3layouts">
								<li><a href="#" class="facebook agileits w3layouts" title="Go to Our Facebook Page"></a></li>
								<li><a href="#" class="twitter agileits w3layouts" title="Go to Our Twitter Account"></a></li>
								<li><a href="#" class="googleplus agileits w3layouts" title="Go to Our Google Plus Account"></a></li>
								<li><a href="#" class="instagram agileits w3layouts" title="Go to Our Instagram Account"></a></li>
							</ul>
							<p class="description agileits w3layouts">It has roots in a piece of classical Latin literature from 45 BC.</p>
						</figcaption>
					</figure>
				</div>
				<div class="col-md-4 col-sm-4 team-grid agileits w3layouts team-grid3 wow slideInUp">
					<figure class="effect-zoe agileits w3layouts">
						<img src="images/team-3.jpg" alt="Agileits W3layouts"/>
						<figcaption>
							<h4>Jack <span>Doe</span></h4>
							<ul class="social-icons agileits w3layouts">
								<li><a href="#" class="facebook agileits w3layouts" title="Go to Our Facebook Page"></a></li>
								<li><a href="#" class="twitter agileits w3layouts" title="Go to Our Twitter Account"></a></li>
								<li><a href="#" class="googleplus agileits w3layouts" title="Go to Our Google Plus Account"></a></li>
								<li><a href="#" class="instagram agileits w3layouts" title="Go to Our Instagram Account"></a></li>
							</ul>
							<p class="description agileits w3layouts">Richard McClintock is a Latin professor at Hampden-Sydney College.</p>
						</figcaption>
					</figure>
				</div>
				<div class="clearfix"></div>
			</div>

		</div>
	</div>
	<!-- //Team -->



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
				<div class="col-md-4 col-sm-4 agileits w3layouts footer-grid footer-grid-2 wow fadeInUp">
					<ul class="agileits w3layouts">
						<li class="agileits w3layouts"><a href="gallery.blade.php">Bahamas</a></li>
						<li class="agileits w3layouts"><a href="gallery.blade.php">Hawaii</a></li>
						<li class="agileits w3layouts"><a href="gallery.blade.php">Miami</a></li>
						<li class="agileits w3layouts"><a href="gallery.blade.php">Ibiza</a></li>
					</ul>
				</div>
				<div class="col-md-4 col-sm-4 footer-grid agileits w3layouts footer-grid-2 wow fadeInUp">
					<ul class="agileits w3layouts">
						<li class="agileits w3layouts"><a href="index.html">Home</a></li>
						<li class="agileits w3layouts"><a href="cuisines.blade.php">Cuisines</a></li>
						<li class="agileits w3layouts"><a href="gallery.blade.php">Gallery</a></li>
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
				<ul class="social-icons agileits w3layouts">
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
@endsection