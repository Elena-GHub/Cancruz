@extends('layouts.app')

@section('content')

    <div class="banner agileits w3layouts">
        <img src="images/tardor/paisaje_tardor1.jpg" alt="Foto paisaje">
        <h1 class="wow agileits w3layouts fadeInDown">PROYECTO</h1>
    </div>

    <div class="details agileits w3layouts">
        <div class="container">

            <h3>Proyecto y Reconstruccion</h3>

            <div class="details-grids agileits w3layouts">
                <div class="col-md-4 col-sm-4 details-grid agileits w3layouts details-grid-1 wow slideInUp">
                    <div class=" details-grid1 agileits w3layouts">
                        <div class="details-grid-image agileits w3layouts">
                            <img src="images/inicio/img_4506_lowres.jpg" alt="Foto masia">
                        </div>
                        <div class="details-grid-info agileits w3layouts">
                            <p>PROYECTO: El proyecto de recuperación de la Masía de Can Planes y su entorno se ha hecho
                                con el antiguo principio de la masía, es decir, con la autogestión de los recursos
                                propios y de los alrededores. Pero también tal como estamos ahora en el siglo XXI:
                                en versión "5.0". aprovechando las nuevas tecnologías sin intervenir en la construcción
                                original y preservando el medio. Respetándolos y asegurando su conservación,
                                todo con el objetivo de garantizar la mejor convivencia con sus habitantes y sus huéspedes.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 details-grid details-grid-2 wow agileits w3layouts slideInUp">
                    <div class="details-grid2 agileits w3layouts">
                        <div class="details-grid-image agileits w3layouts">
                            <img src="images/inicio/ventana.jpg" alt="Foto ventana">
                        </div>
                        <div class="details-grid-info agileits w3layouts">
                            <p>RECONSTRUCCIÓN: Todas las estancias y actuaciones re-constructivas en el edificio
                                se han hecho con materiales de la época: piedra, cal, vigas de madera, suelos hidráulicos,
                                entre otros. Elementos recuperados principalmente de escombros y de la cantera cercana de
                                piedra roja del Figaró. Tratados con barnices y pinturas al agua, ecológicos, con ausencia
                                de colas fenólicas y otros agentes químicos agresivos. Todo con el fin de lograr una atmósfera
                                lo menos contaminada posible.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 details-grid agileits w3layouts details-grid-3 wow slideInUp">
                    <div class="details-grid3 agileits w3layouts">
                        <div class="details-grid-image agileits w3layouts">
                            <img src="images/inicio/cocina.jpg" alt="Foto cocina">
                        </div>
                        <div class="details-grid-info agileits w3layouts">
                            <p>El mismo criterio hemos seguido al incorporar mobiliario, objetos y ropa de hogar,
                                donde ha primado la recuperación de muebles y electrodomésticos para darles una
                                segunda oportunidad. En los textiles, alfombras, cortinas y sábanas, están presentes
                                las fibras naturales como la lana, el algodón y el lino. En cuanto a los cierres de
                                hierro y maderas, así como la climatización, los materiales de construcción, los trabajos
                                de paletero, estos han sido adquiridos y ejecutados con ayuda de los maestros de obra del
                                Figaró, Aiguafreda y la Garriga.</p>
                        </div>
                    </div>
                </div>
            </div>


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
                                <h4 class="modal-title agileits w3layouts">HOLA</h4>
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
        </div>
    </div>


    <div class="ventures agileits w3layouts">
        <div class="container">

            <h3></h3>

            <div class="ventures-grids agileits w3layouts">
                <div class="col-md-3 col-sm-3 ventures-grid agileits w3layouts ventures-grid1 ventures-grid-image wow slideInUp">
                    <img src="images/inicio/neu-1.jpg" alt="Agileits W3layouts">
                </div>
                <div class="col-md-3 col-sm-3 ventures-grid agileits w3layouts ventures-grid2 ventures-grid-info wow slideInUp">
                    <h4>Energia y Recursos</h4>
                    <p>Energía eléctrica auto-producida con placas fotovoltaicas y un aerogenerador.
                        Calefacción y agua caliente con placa termosolar. Aprovechamiento de los pozos existentes
                        para el agua.</p>
                </div>
                <div class="col-md-3 col-sm-3 ventures-grid agileits w3layouts ventures-grid3 ventures-grid-image wow slideInUp">
                    <img src="images/inicio/frutas.jpg" alt="Foto frutas y verduras">
                </div>
                <div class="col-md-3 col-sm-3 ventures-grid agileits w3layouts ventures-grid4 ventures-grid-info wow slideInUp">
                    <h4>Alimentos Ecologicos</h4>
                    <p>El surtido de los comestibles en primer momento, y según temporada, son las hortalizas y verduras que
                        cultivamos en nuestro huerto, así como la miel de nuestros campos.</p>
                </div>
                <div class="col-md-3 col-sm-3 ventures-grid agileits w3layouts ventures-grid5 ventures-grid-image wow slideInUp">
                    <img src="images/huerto/img-20140922-wa0004.jpg" alt="Foto herramientas y huerto">
                </div>
                <div class="col-md-3 col-sm-3 ventures-grid agileits w3layouts ventures-grid6 ventures-grid-info wow slideInUp">
                    <h4>Dia a Dia</h4>
                    <p>Ofrecemos también cena o comida. Disfrutar en su elaboración y el servicio
                        son nuestro objetivo. El visitante es bienvenido a participar en la experiencia del dia a dia en una masia.</p>
                </div>
                <div class="col-md-3 col-sm-3 ventures-grid agileits w3layouts ventures-grid7 ventures-grid-image wow slideInUp">
                    <img src="images/tardor/paisaje_tardor3.jpg" alt="Foto camino Montseny">
                </div>
                <div class="col-md-3 col-sm-3 ventures-grid agileits w3layouts ventures-grid8 ventures-grid-info wow slideInUp">
                    <h4>Otras Experiencias</h4>
                    <p>Caminos del Montseny : Rutas a pie por el parque con un guía experto que nos hará descubrir parajes
                        de una belleza indescriptible, disfrutando de forma segura y llena de experiencias.</p>
                </div>
                <div class="clearfix"></div>
            </div>

        </div>
    </div>

@endsection
