@extends('layouts.app')

@section('content')

    <!-- Section Breadcrumbs-->
    <section class="section parallax-container breadcrumbs-wrap" data-parallax-img="{{ asset('html/images/bg-breadcrumbs-1-1920x726.jpg') }}">
        <div class="parallax-content breadcrumbs-custom context-dark">
            <div class="container">
                <h3 class="breadcrumbs-custom-title">Nosotros</h3>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Nosotros</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section section-md bg-gray-100">
        <div class="container">
            <div class="row row-30">
                <div class="col-lg-12">
                    <!-- Heading Component-->
                    {{--
                    <article class="heading-component">
                        <div class="heading-component-inner">
                            <h5 class="heading-component-title">Player overview
                            </h5>
                        </div>
                    </article>
                    --}}

                    <div class="block-player-info">
                        <!--h4>Biography</h4>
                        <article class="quote-modern">
                            <div class="quote-modern-text">
                                <p>Jack Windsor is the best player in our team. Technically perfect, he brings together unselfishness, pace, composure and wins, which make him number one.</p>
                            </div>
                        </article>
                        <div class="block-player-info-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                        </div-->
                        <div class="block-player-info-timeline">
                            <div class="player-info-timeline-item">
                                <div class="player-info-timeline-item-header">
                                    <span class="timeline-counter">1949</span>
                                    <h5>Inicios</h5>
                                </div>
                                <div class="player-info-timeline-item-text">
                                    <p>EN EL AÑO 1949 APROXIMADAMENTE ALFREDO AZABACHE GERONIMO VINIENDO DEL NORTE DEL PAIS Y A RAIZ DE LA FALTA DE OPORTUNIDADES LLEGA A LIMA Y LUEGO DE ALGUNOS AÑOS SE MUDA A SANTA BEATRIZ, URBANIZACION QUE PERTENECE EN EL CERCADO DE LIMA CON SU ESPOSA PARA EMPRENDER UNO DE SUS OFICIOS QUE CONOCIA MUCHO, QUE ES LA CARPINTERIA. </p>
                                    <p>LUEGO DE ALGUNOS AÑOS LLEGA AL LOCAL DE SANTA BEATRIZ UN EXTRANJERO PARA VER SI PODRÍA DESARROLLARLE UNA MESA DE FUTBOL YA QUE EN EL PERU NO ERA MUY COMUN EL JUEGO EN ESOS AÑOS Y NECESITABA QUE ALGUIEN SE LO DISEÑE Y FABRICARA, ES ASI QUE EL ABUELO EMPEZO A FABRICAR LA MESA DE FUTBOL Y COMO TUVO MUCHA DEMANDA HASTA EL DIA DE HOY Y APARTE CON OTROS JUEGOS COMO MESAS DE BILLAR, MESAS DE TENIS Y MESAS DE SAPO ETC. </p>
                                    <p>SOMOS UNA DE LAS MEJORES Y MAS ANTIGUAS EMPRESAS EN EL MERCADO QUE SE HAN MANTENIDO GRACIAS A SU CALIDAD Y SU PERSEVERANCIA EN EL NEGOCIO HABIENDO ATENDIDO A TODO EL PERU Y ALGUNAS PARTES DEL EXTANJERO, TAMBIEN. </p>
                                </div>
                            </div>
                            <div class="player-info-timeline-item">
                                <div class="player-info-timeline-item-header">
                                    <span class="timeline-counter">2004</span>
                                    <h5>Tercera Generación</h5>
                                </div>
                                <div class="player-info-timeline-item-text">
                                    <p>DESDE EL 2004 ASUMI COMO DESENDIENTE DE MI ABUELO LAS FUNCIONES GERENCIALES DE LA EMPRESA QUE ME QUEDA COMO RESPONSABILIDAD DE SEGUIR EN EL NEGOCIO QUE MI FAMILIA EMPEZO CON LA MISMA CALIDAD, ATENCION Y RESPONSABILIDAD QUE SE MERECE LA MARCA PARA PODER SATISFACER A LOS CLIENTES QUE HEMOS GANADO Y A LOS NUEVOS CLIENTES QUE APARECEN. </p>
                                    <p>YA SON 70 AÑOS TRABAJANDO Y HACIENDO CALIDAD.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!--div class="col-lg-4">
                    <div class="row row-30">
                        <div class="col-md-6 col-lg-12">
                            <div class="table-custom-responsive">
                                <table class="table-custom table-standings table-modern">
                                    <thead>
                                    <tr>
                                        <th colspan="2">Player Position</th>
                                        <th>Benefit</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><span class="table-counter">1</span></td>
                                        <td class="player-inline">
                                            <div class="player-title">
                                                <div class="player-name">S. Lavery-Spahr</div>
                                                <div class="player-country">Phoenix</div>
                                            </div>
                                        </td>
                                        <td>$1,298,425</td>
                                    </tr>
                                    <tr>
                                        <td><span class="table-counter">2</span></td>
                                        <td class="player-inline">
                                            <div class="player-title">
                                                <div class="player-name">P. Bohn III</div>
                                                <div class="player-country">Chicago</div>
                                            </div>
                                        </td>
                                        <td>$1,00,400</td>
                                    </tr>
                                    <tr>
                                        <td><span class="table-counter">3</span></td>
                                        <td class="player-inline">
                                            <div class="player-title">
                                                <div class="player-name">K. Sherman</div>
                                                <div class="player-country">Boston</div>
                                            </div>
                                        </td>
                                        <td>$900,400</td>
                                    </tr>
                                    <tr>
                                        <td><span class="table-counter">4</span></td>
                                        <td class="player-inline">
                                            <div class="player-title">
                                                <div class="player-name">D. Bidwell</div>
                                                <div class="player-country">Houston</div>
                                            </div>
                                        </td>
                                        <td>$898,425</td>
                                    </tr>
                                    <tr>
                                        <td><span class="table-counter">5</span></td>
                                        <td class="player-inline">
                                            <div class="player-title">
                                                <div class="player-name">L. Boresch Jr.</div>
                                                <div class="player-country">Atlanta</div>
                                            </div>
                                        </td>
                                        <td>$700,400</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12">
                            <div class="owl-carousel owl-carousel-dots-modern awards-carousel" data-items="1" data-autoplay="true" data-autoplay-speed="4000" data-dots="true" data-nav="false" data-stage-padding="0" data-loop="true" data-margin="0" data-mouse-drag="true">
                                <div class="awards-item">
                                    <div class="awards-item-main">
                                        <h4 class="awards-item-title"><span class="text-accent">World</span>Champion
                                        </h4>
                                        <div class="divider"></div>
                                        <h5 class="awards-item-time">December 2014</h5>
                                    </div>
                                    <div class="awards-item-aside"> <img src="images/thumbnail-minimal-1-87x145.png" alt="" width="87" height="145"/>
                                    </div>
                                </div>
                                <div class="awards-item">
                                    <div class="awards-item-main">
                                        <h4 class="awards-item-title"><span class="text-accent">Best</span>Player
                                        </h4>
                                        <div class="divider"></div>
                                        <h5 class="awards-item-time">June 2015</h5>
                                    </div>
                                    <div class="awards-item-aside"> <img src="images/thumbnail-minimal-2-90x140.png" alt="" width="90" height="140"/>
                                    </div>
                                </div>
                                <div class="awards-item">
                                    <div class="awards-item-main">
                                        <h4 class="awards-item-title"><span class="text-accent">Best</span>Coach
                                        </h4>
                                        <div class="divider"></div>
                                        <h5 class="awards-item-time">November 2016</h5>
                                    </div>
                                    <div class="awards-item-aside"> <img src="images/thumbnail-minimal-3-85x143.png" alt="" width="85" height="143"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div-->

            </div>

        </div>
    </section>

@endsection