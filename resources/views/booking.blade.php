<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

<title>Masia Can Cruz Category Flat Bootstrap Responsive Website Template | Home :: W3layouts</title>


<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Tropical Resorts a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>



<link rel="stylesheet" href="css/bootstrap.min.css"	type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" 		type="text/css" media="all">
<link rel="stylesheet" href="css/animate.css" 		type="text/css" media="all">



 <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" type="text/css">
 <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Cinzel+Decorative:400,900,700" type="text/css">
 <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700"			   type="text/css">


</head>


<body>
	<div class="flex-center position-ref full-height">


	<div class="header agileits w3layouts" id="home">


		<nav class="navbar navbar-default w3l aits wow bounceInUp agileits w3layouts">
			<div class="container">

				<div class="navbar-header agileits w3layouts">
					<button type="button" class="navbar-toggle agileits w3layouts collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
						<span class="sr-only agileits w3layouts">Toggle navigation</span>
						<span class="icon-bar w3l"></span>
						<span class="icon-bar aits"></span>
						<span class="icon-bar w3laits"></span>
					</button>
					<a class="navbar-brand agileits w3layouts" href="http://127.0.0.1:8000">Masia Can Cruz</a>
				</div>

				<div id="navbar" class="navbar-collapse agileits w3layouts navbar-right collapse">
					<ul class="nav agileits w3layouts navbar-nav">
						<li><a href="{{route ('room')}}">Habitaciones</a></li>
						<li><a href="{{route ('gallery')}}">Galeria</a></li>
						<li><a href="{{route ('booking')}}">Reservas</a></li>
					</ul>
				</div>

			</div>
		</nav>





		<div class="banner agileits w3layouts">
			<img src="images/banner.jpg" alt="Agileits W3layouts">
			<h1 class="wow agileits w3layouts fadeInDown">Reservas</h1>
		</div>


	</div>





	<div class="location agileits w3layouts">
		<div class="container">

			<div class="col-md-6 col-sm-6 agileits w3layouts location-grids location-grids-1 wow slideInLeft">
				<h3>Donde estamos</h3>
				<p>Para venir a Can Planes de Bcn, Granollers etc., toma la C17 dirección Vic. <br>C-17 SALIDA GARRIGA NORTE Satis</p>
			</div>

			<div class="col-md-6 col-sm-6 agileits w3layouts location-grids location-grids-2 wow slideInRight">
				<img src="images/CanCruz-mapa-fake.png" alt="Mapa de acceso a carretera">
			</div>
			<div class="clearfix"></div>

		</div>
	</div>





        <div class="reg agileits w3layouts" id="booking">
            <div class="container">

                <div class="register agileits w3layouts">
                    <form action="{{Route('client.store')}}" method="POST">

                        @CSRF

                        <h2>Reserva tu estancia</h2>


                        <div class="dates wow  agileits w3layoutsslideInLeft">
                            <div class="dates agileits w3layouts">
                                <h4>Nombre</h4>
                                <div>
                                    <input type="text" class="form-control agileits w3layouts slideInLeft" name="name" required="">
                                </div>
                                <h4>Apellidos</h4>
                                <div>
                                    <input type="text" class="form-control agileits w3layouts slideInLeft" name="last_name"  required="">
                                </div>
                                <h4>Email</h4>
                                <div>
                                    <input type="email" class="form-control agileits w3layouts slideInLeft" name="email"  required="">                                </div>
                                </div>
                                <h4>Móvil</h4>
                                <div>
                                    <input type="text" class="form-control agileits w3layouts slideInLeft" name="movil"  required="">
                                </div>
                                <h4>Comentario</h4>
                                <div>
                                    <input type="text" class="form-control agileits w3layouts slideInLeft" name="commentary"   required="">
                                </div>

                            </div>
                        </div>

                        <div class="members wow agileits w3layouts slideInLeft">
                            <div class="adult agileits w3layouts">
                                <h4>Adultos/as</h4>
                                <div class="dropdown-button agileits w3layouts">
                                    <select class="dropdown agileits w3layouts" id="adults" name="adults" tabindex="10" data-settings='{"wrapperClass":"flat"}'>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>

                                    </select>
                                </div>
                            </div>

                            <div class="child wow slideInLeft agileits w3layouts">
                                <h4>Niños/as</h4>
                                <div class="dropdown-button agileits w3layouts">
                                    <select class="dropdown agileits w3layouts" id="childs"   name="childs" tabindex="10" data-settings='{"wrapperClass":"flat"}'>
                                        <option value="0"></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>

                                    </select>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="suite wow slideInLeft agileits w3layouts">
                            <div class="dropdown-button agileits w3layouts">
                                <form action="Calendar.php ?>" method="post">
                                <h4>Habitaciones</h4>
                                <select class="dropdown agileits w3layouts" name="room" tabindex="10" data-settings='{"wrapperClass":"flat"}'>

                                    <option value="1">Habitación Doble PUIGRACIÓS</option>
                                    <option value="2">Habitación Doble SANT CRISTÒFOL</option>
                                    <option value="3">Dúplex DEL ROCACENTELLA</option>
                                </select>
                            </div>
                        </div>

                        <div class="book-pag wow agileits w3layouts slideInLeft">
                            <h4>Seleccionar estancia</h4>
                            <div class="book-pag-frm1 agileits w3layouts wow slideInLeft">
                                <label>Fecha de entrada</label>
                                <input class="date agileits w3layouts" id="datepicker1" type="date" name="entry_date"  value="Entrada" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">
                            </div>
                            <div class="book-pag-frm2 wow agileits w3layouts slideInLeft">
                                <label>Fecha de salida</label>
                                <input class="date agileits w3layouts" id="datepicker2" type="date" name="departure_date"  value="Salida" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">
                            </div>
                            <div class="clearfix"></div>
                        </div>
                                </form>

                        <div class="food wow agileits w3layouts slideInLeft">
                            <h4>Extras</h4>
                            <div class="radio-btns agileits w3layouts">
                                <div>
                                    <input id="pet" class="w3-radio" type="checkbox" name="pet" value="1">
                                        <label class="w3-validate">Mascota</label>
                                </div>
                                <div>
                                        <input id="breakfast" class="w3-radio" type="checkbox" name="breakfast" value="1">
                                        <label class="w3-validate">Desayuno</label>
                                </div>
                            </div>
                        </div>
                        <div class="prices  agileits w3layoutsslideInLeft">
                            <div class="prices agileits w3layouts">
                                <h4>Precio Total</h4>
                                <div>

                                    <input type="text" class="form-control agileits w3layouts slideInLeft" name="total_price" >
                                </div>
                            </div>
                        </div>


                        <div class="submit wow agileits w3layouts slideInLeft">
                        <!--<a class="popup-with-zoom-anim agileits w3layouts" href="{{ url('/') }}">Reservar ahora</a>-->
                            <input type="submit" value="Reservar" class="popup-with-zoom-anim agileits w3layouts">
                        </div>
                        <input type="submit">
                    </form>


                    <!-- Popup-Box -->
                    <!--<div id="popup">
                        <div id="small-dialog" class="mfp-hide agileits w3layouts">
                            <div class="pop_up agileits w3layouts">
                                <div class="payment-online-form-left agileits w3layouts">
                                    <form>
                                        <h4><span class="shipping agileits w3layouts"> </span>Customer Details</h4>
                                        <ul class="agileits w3layouts">
                                            <li class="agileits w3layouts"><input required="" class="text-box-dark agileits w3layouts" type="text" value="First Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'First Name';}"></li>
                                            <li class="agileits w3layouts"><input required="" class="text-box-dark agileits w3layouts" type="text" value="Last Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Last Name';}"></li>
                                        </ul>
                                        <ul class="agileits w3layouts">
                                            <li class="agileits w3layouts"><input required="" class="text-box-dark agileits w3layouts" type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}"></li>
                                            <li class="agileits w3layouts"><input required="" class="text-box-dark agileits w3layouts" type="text" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}"></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                        <h4 class="paymenthead agileits w3layouts"><span class="payment agileits w3layouts"></span>Payment Details</h4>
                                        <div class="clearfix"></div>
                                        <ul class="payment-type agileits w3layouts">
                                            <li class="agileits w3layouts"><span class="col_checkbox agileits w3layouts">
                                                    <input id="3" class="css-checkbox1 agileits w3layouts" type="checkbox">
                                                    <label for="3" class="css-label1 agileits w3layouts"></label>
                                                    <a class="visa agileits w3layouts" href="#"></a>
                                                </span>
                                            </li>
                                            <li class="agileits w3layouts">
                                                <span class="col_checkbox agileits w3layouts">
                                                    <input id="4" class="css-checkbox2 agileits w3layouts" type="checkbox">
                                                    <label for="4" class="css-label2 agileits w3layouts"></label>
                                                    <a class="paypal agileits w3layouts" href="#"></a>
                                                </span>
                                            </li>
                                        </ul>
                                        <ul class="agileits w3layouts">
                                            <li class="agileits w3layouts"><input required="" class="text-box-dark agileits w3layouts" type="text" value="Card Number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Card Number';}"></li>
                                            <li class="agileits w3layouts"><input required="" class="text-box-dark agileits w3layouts" type="text" value="Name on card" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name on card';}"></li>
                                        </ul>
                                        <ul class="agileits w3layouts">
                                            <li class="agileits w3layouts"><input required="" class="text-box-light hasDatepicker agileits w3layouts" type="text" id="datepicker" value="Expiration Date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Expiration Date';}"><em class="pay-date"> </em></li>
                                            <li class="agileits w3layouts"><input required="" class="text-box-dark agileits w3layouts" type="text" value="Security Code" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Security Code';}"></li>
                                        </ul>
                                        <ul class="payment-sendbtns agileits w3layouts">
                                            <li class="agileits w3layouts"><input type="reset" value="Reset"></li>
                                            <li class="agileits w3layouts"><input type="submit" value="Process Payment" class="order"></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button title="Close (Esc)" type="button" class="mfp-close agileits w3layouts">×</button>-->
                    <!-- //Popup-Box -->

                </div>

            </div>
        </div>




	<div class="footer agileits w3layouts">
		<div class="container">

			<div class="col-md-6 col-sm-6 agileits w3layouts footer-grids">
				<div class="col-md-4 col-sm-4 footer-grid agileits w3layouts footer-grid-3 wow fadeInUp">
					<ul class="agileits w3layouts">
						<li class="agileits w3layouts"><a href="about.html">Nosotros</a></li>
						<li class="agileits w3layouts"><a href="{{route ('cuisine')}}">Cocina Ecologica</a></li>
						<li class="agileits w3layouts"><a href="gallery.html">Proyecto</a></li>
						<li class="agileits w3layouts"><a href="gallery.html">Comunidad</a></li>
						<li class="agileits w3layouts"><a href="booking.html">Contacto</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-6 col-sm-6 footer-grids agileits w3layouts social wow fadeInUp">
				<ul class="social-icons">
					<li class="agileits w3layouts"><a href="https://www.facebook.com/sharer.php?u=https%3A%2F%2Fcan-plans.com%2F&t=" class="facebook agileits w3layouts" title="Facebook"></a></li>
					<li class="agileits w3layouts"><a href="https://twitter.com/intent/tweet?via=wordpressdotcom&url=https%3A%2F%2Fcan-plans.com%2F" class="twitter agileits w3layouts" title="Twiter"></a></li>
					<li class="agileits w3layouts"><a href="#" class="instagram agileits w3layouts" title="Instagram"></a></li>
				</ul>
			</div>
			<div class="clearfix"></div>

		</div>
	</div>


		<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	 	<script type="text/javascript" src="js/bootstrap.min.js"></script>


		<script src="js/wow.min.js"></script>
				<script>
					new WOW().init();
				</script>


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

			<script type="text/javascript">
				$(document).ready(function() {
					var defaults = {
						containerID: 'toTop',
						containerHoverID: 'toTopHover',
						scrollSpeed: 100,
						easingType: 'linear'
					};
					$().UItoTop({ easingType: 'easeOutQuart' });
				});
			</script>
			<a href="#" id="toTop" class="agileits w3layouts" style="display: block;"> <span id="toTopHover" style="opacity: 0;"> </span></a>

			<script type="text/javascript" src="js/move-top.js"></script>
			<script type="text/javascript" src="js/easing.js"></script>
			<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll, .navbar li a, .footer li a").click(function(event){
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
			</script>
	</body>
</html>
