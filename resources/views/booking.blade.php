@extends('layouts.app')

@section('content')

    <div class="banner agileits w3layouts">
        <img src="images/banner.jpg" alt="Agileits W3layouts">
        <h1 class="wow agileits w3layouts fadeInDown">Reservas</h1>
    </div>


    <div class="location agileits w3layouts">
        <div class="container">

            <div class="col-md-6 col-sm-6 agileits w3layouts location-grids location-grids-1 wow slideInLeft">
                <h3>Como llegar</h3>
            </div>
            <div class="map wow agileits w3layouts slideInUp" id="map">
                <div class="map-hover agileits w3layouts">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2978.127250641673!2d2.284077914961283!3d41.717772883411854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4c5781a8b6bcb%3A0x6dd4d1b5896df742!2sMasia%20Can%20Plans!5e0!3m2!1ses!2ses!4v1589798451303!5m2!1ses!2ses" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
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
                                <input type="text" class="form-control agileits w3layouts slideInLeft" name="first_name" required="">
                            </div>
                            <h4>Apellidos</h4>
                            <div>
                                <input type="text" class="form-control agileits w3layouts slideInLeft" name="last_name"  required="">
                            </div>
                            <h4>Email</h4>
                            <div>
                                <input type="email" class="form-control agileits w3layouts slideInLeft" name="email"  required="">
                            </div>
                            </div>
                            <h4>Móvil</h4>
                            <div>
                                <input type="text" class="form-control agileits w3layouts slideInLeft" name="phone_number"  required="">
                            </div>
                            <h4>Comentario</h4>
                            <div>
                                <input type="text" class="form-control agileits w3layouts slideInLeft" name="comments"   required="">
                            </div>
                        </div>
                    </div>

                        <div class="members wow agileits w3layouts slideInLeft">
                            <div class="guests agileits w3layouts">
                                <h4>Huéspedes</h4>
                                <div class="dropdown-button agileits w3layouts">
                                    <select class="dropdown agileits w3layouts" id="guests" name="guests" tabindex="10" data-settings='{"wrapperClass":"flat"}'>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="clearfix">
                            </div>
                        </div>

                        <div class="suite wow slideInLeft agileits w3layouts">
                            <div class="dropdown-button agileits w3layouts">
                                <h4>Habitaciones</h4>
                                <select onchange="mostrarSugerencia(this.value)" class="dropdown agileits w3layouts" name="room_id" tabindex="10" data-settings='{"wrapperClass":"flat"}'>
                                    <option value="none">Elige</option>
                                    <option value="Suite PUIGRACIÓS">Suite PUIGRACIÓS</option>
                                    <option value="Suite SANT CRISTÒFOL">Suite SANT CRISTÒFOL</option>
                                    <option value="Suite ROCACENTELLA">Suite ROCACENTELLA</option>
                                </select>
                            </div>
                        </div>

                        <div class="book-pag wow agileits w3layouts slideInLeft">
                            <h4>Seleccionar estancia</h4>
                            <div class="book-pag-frm1 agileits w3layouts wow slideInLeft">
                                <label>Fecha de entrada</label>
                                <input class="date agileits w3layouts" id="datepicker1" type="date" name="check_in_date"  value="Entrada" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">
                            </div>
                            <div class="book-pag-frm2 wow agileits w3layouts slideInLeft">
                                <label>Fecha de salida</label>
                                <input class="date agileits w3layouts" id="datepicker2" type="date" name="check_out_date"  value="Salida" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">
                            </div>
                            <div class="clearfix"></div>
                        </div>


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

            </form>
        </div>

    </div>
    </div>

@endsection
