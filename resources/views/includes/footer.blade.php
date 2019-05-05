<footer class="section context-dark footer-creative footer-creative-dark">
    <div class="footer-creative-main">
        <div class="footer-creative-main-top" id="clientes">
            <div class="container text-center">
                <div class="row row-20 justify-content-center align-items-center">
                    <div class="col-md-2 text-md-left">
                        <h5 class="text-shuttle-gray">Clientes</h5>
                    </div>
                    @foreach ($logos as $logo)
                    <div class="col-4 col-sm-2 col-lg-2">
                        <a class="link-image" href="#">
                            <img src="{{ Voyager::image($logo->image) }}" alt="" />
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="container">
            <hr>
        </div>
        <div class="footer-creative-main-bottom">
            <div class="container">
                <div class="row row-50 justify-content-center justify-content-lg-between">
                    <div class="col-md-4 col-lg-5 col-xxl-4 text-center text-lg-left">
                        <article class="unit flex-column flex-lg-row align-items-center justify-content-center justify-content-sm-start footer-creative-info">
                            <div class="unit-left">
                                <a class="brand brand-md" href="/">
                                    <img class="brand-logo" src="{{ Voyager::image(setting('site.logo')) }}" alt="" />
                                </a>
                            </div>
                            <div class="unit-body">
                                <p style="color: #FFF">70 AÑOS TRABAJANDO Y HACIENDO CALIDAD..</p>
                            </div>
                        </article>
                        <div class="group-md group-middle">
                            <a class="button button-sm button-gray-outline" href="{{ route('about') }}">Nosotros</a>
                            {{--
                            <div class="group-item">
                                <ul class="list-inline list-inline-xs">
                                    <li><a class="icon icon-corporate fa fa-facebook" href="#"></a></li>
                                    <li><a class="icon icon-corporate fa fa-twitter" href="#"></a></li>
                                    <li><a class="icon icon-corporate fa fa-google-plus" href="#"></a></li>
                                    <li><a class="icon icon-corporate fa fa-instagram" href="#"></a></li>
                                </ul>
                            </div>
                            --}}
                        </div>
                    </div>
                    <!--div class="col-10 col-md-4 col-lg-4 col-xl-3">
                        <h5>Latest news</h5>
                        <div class="divider-medium"></div>
                        <div class="wrap-posts-classic">
                            <article class="post-classic">
                                <div class="post-classic-main">
                                    <p class="post-classic-title">
                                        <a href="blog-post.html">Lam secures immediate tour return and becomes a winner</a>
                                    </p>
                                    <div class="post-classic-time">
                                        <span class="icon mdi mdi-clock"></span>
                                        <time datetime="2018">April 15, 2018</time>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div-->
                    <div class="col-10 col-md-4 col-lg-3">
                        <!--h5>Contacto</h5-->
                        <!--div class="divider-medium"></div-->
                        <ul class="list-md">
                            <li class="unit unit-horizontal align-items-center">
                                <div class="unit-left">
                                    <img src="{{ asset('html/images/WhatsApp.png') }}" width="32" />
                                </div>
                                <div class="unit-body">
                                    <h6>WhatsApp</h6><a class="link" href="#">{{ setting('site.mobile') }}</a>
                                </div>
                            </li>
                            <li class="unit unit-horizontal align-items-center">
                                <div class="unit-left">
                                    <span class="icon icon-primary icon-md mdi mdi-phone"></span>
                                </div>
                                <div class="unit-body">
                                    <h6>Teléfonos</h6><a class="link" href="#">{{ setting('site.phone') }}</a>
                                </div>
                            </li>
                            <li class="unit unit-horizontal align-items-center">
                                <div class="unit-left">
                                    <span class="icon icon-primary icon-md mdi mdi-email"></span>
                                </div>
                                <div class="unit-body">
                                    <h6>Email</h6><a class="link" href="#">{{ setting('site.email') }}</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-creative-aside footer-creative-darken">
        <div class="container">
            <div class="layout-justify">
                <nav class="nav-minimal">
                    {{--
                    <ul class="nav-minimal-list">
                        <li><a href="/">Home</a></li>
                        <li><a href="{{ route('about') }}">Nosotros</a></li>
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                        <li><a href="{{ route('contact') }}">Contacto</a></li>
                    </ul>
                    --}}
                </nav>
                <!-- Rights-->
                <p class="rights">
                    <span>JUEGOSANTABEATRIZ.PE</span>
                    <span>&nbsp;&copy;&nbsp;</span>
                    <span class="copyright-year"></span>
                    <span> &nbsp; </span>
                    <a class="link-underline" target="_blank" href="http://vardeveloper.com">VARDEVELOPER.COM</a>
                </p>
            </div>
        </div>
    </div>
</footer>