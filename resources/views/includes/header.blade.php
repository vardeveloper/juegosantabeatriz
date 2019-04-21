<header class="section page-header rd-navbar-dark">
    <!-- RD Navbar-->
    <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-corporate" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed"
             data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="166px" data-xl-stick-up-offset="166px"
             data-xxl-stick-up-offset="166px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-panel rd-navbar-darker">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-main"><span></span></button>
                <!-- RD Navbar Panel-->
                {{--
                <div class="rd-navbar-panel-inner container">
                    <div class="rd-navbar-collapse rd-navbar-panel-item rd-navbar-panel-item-left">
                        <nav class="nav-light">
                            <ul class="nav-light-list">
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="news.html">News</a></li>
                                <li><a href="list-shop.html">Shop</a></li>
                                <li><a href="contact-us.html">Contact Us</a></li>
                                <li><a href="#">Watch Live</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="rd-navbar-panel-item rd-navbar-panel-item-right">
                        <ul class="list-inline list-inline-bordered">
                            <li>
                                <!-- Select 2-->
                                <select class="select select-inline select-inline-secondary" data-placeholder="Select an option" data-dropdown-class="select-inline-dropdown select-inline-dropdown-secondary">
                                    <option value="en" selected="">en</option>
                                    <option value="fr">fr</option>
                                    <option value="es">es</option>
                                </select>
                            </li>
                            <li>
                                <div class="cart-inline-toggled-outer">
                                    <!-- Link Cart-->
                                    <button class="link link-cart cart-inline-toggle" data-rd-navbar-toggle="#cart-inline"><span class="link-cart-icon fl-bigmug-line-shopping202"></span><span class="link-cart-counter">2</span></button>
                                    <!-- Cart Inline-->
                                    <article class="cart-inline cart-inline-toggled" id="cart-inline">
                                        <div class="cart-inline-inner">
                                            <div class="cart-inline-header">
                                                <h5 class="cart-inline-title">In cart: 2 products</h5>
                                                <p class="cart-inline-subtitle">total price: $750</p>
                                            </div>
                                            <div class="cart-inline-main">
                                                <!-- Product inline-->
                                                <article class="product-inline">
                                                    <div class="product-inline-aside"><a class="product-inline-figure" href="product-page.html"><img class="product-inline-image" src="images/product-Nike-Air-Zoom-Pegasus-67x30.png" alt="" width="67" height="30"/></a></div>
                                                    <div class="product-inline-main">
                                                        <p class="heading-7 product-inline-title"><a href="product-page.html">Nike Air Zoom Pegasus</a></p>
                                                        <ul class="product-inline-meta">
                                                            <li>
                                                                <input class="form-input" type="number" data-zeros="true" value="2" min="1" max="100">
                                                            </li>
                                                            <li>
                                                                <p class="product-inline-price">$500.00</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </article>
                                                <!-- Product inline-->
                                                <article class="product-inline">
                                                    <div class="product-inline-aside"><a class="product-inline-figure" href="product-page.html"><img class="product-inline-image" src="images/product-Nike-Baseball-Hat-55x38.png" alt="" width="55" height="38"/></a></div>
                                                    <div class="product-inline-main">
                                                        <p class="heading-7 product-inline-title"><a href="product-page.html">Nike Baseball Hat</a></p>
                                                        <ul class="product-inline-meta">
                                                            <li>
                                                                <input class="form-input" type="number" data-zeros="true" value="1" min="1" max="100">
                                                            </li>
                                                            <li>
                                                                <p class="product-inline-price">$500.00</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="cart-inline-footer"><a class="button button-md button-default-outline" href="shopping-cart.html">Go to Cart</a><a class="button button-md button-primary" href="checkout.html">Checkout</a></div>
                                        </div>
                                    </article>
                                </div>
                            </li>
                            <li><a class="link link-icon link-icon-left link-classic" href="login-and-register.html"><span class="icon fl-bigmug-line-login12"></span><span class="link-icon-text">Your Account</span></a></li>
                        </ul>
                    </div>
                    <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
                </div>
                --}}
            </div>
            <div class="rd-navbar-main">
                <div class="rd-navbar-main-top">
                    <div class="rd-navbar-main-container container">
                        <!-- RD Navbar Brand-->
                        <div class="rd-navbar-brand">
                            <a class="brand" href="/">
                                <img class="brand-logo" src="{{ Voyager::image(setting('site.logo')) }}" alt="Logo Santa Beatriz" />
                            </a>
                        </div>
                        <div class="rd-navbar-main-element">
                            <!-- RD Navbar List-->
                            <div class="rd-navbar-list-outer">
                                <ul class="rd-navbar-list">
                                    <li>
                                        <div class="unit unit-horizontal align-items-center">
                                            <div class="unit-left">
                                                <svg class="svg-sizing-35 svg-color-primary" x="0px" y="0px" width="27px" height="27px" viewbox="0 0 27 27" preserveAspectRatio="none">
                                                    <path d="M2,26c0,0.553,0.447,1,1,1h5c0.553,0,1-0.447,1-1v-8.185c-0.373-0.132-0.711-0.335-1-0.595V19 H6v-1v-1v-1H5v1v2H3v-9H2v1H1V9V8c0-0.552,0.449-1,1-1h1h1h3h0.184c0.078-0.218,0.173-0.426,0.297-0.617C8.397,5.751,9,4.696,9,3.5 C9,1.567,7.434,0,5.5,0S2,1.567,2,3.5C2,4.48,2.406,5.364,3.056,6H3H2C0.895,6,0,6.895,0,8v7c0,1.104,0.895,2,2,2V26z M8,26H6v-6h2 V26z M5,26H3v-6h2V26z M3,3.5C3,2.121,4.121,1,5.5,1S8,2.121,8,3.5S6.879,6,5.5,6S3,4.879,3,3.5 M1,15v-3h1v4 C1.449,16,1,15.552,1,15"></path>
                                                    <path d="M11.056,6H11h-1C8.895,6,8,6.895,8,8v7c0,1.104,0.895,2,2,2v9c0,0.553,0.447,1,1,1h5 c0.553,0,1-0.447,1-1v-9c1.104,0,2-0.896,2-2V8c0-1.105-0.896-2-2-2h-1h-0.056C16.594,5.364,17,4.48,17,3.5 C17,1.567,15.434,0,13.5,0S10,1.567,10,3.5C10,4.48,10.406,5.364,11.056,6 M10,15v1c-0.551,0-1-0.448-1-1v-3h1V15z M11,20h2v6h-2 V20z M16,26h-2v-6h2V26z M17,16v-1v-3h1v3C18,15.552,17.551,16,17,16 M17,7c0.551,0,1,0.448,1,1v1v1v1h-1v-1h-1v5v4h-2v-1v-1v-1h-1 v1v1v1h-2v-4v-5h-1v1H9v-1V9V8c0-0.552,0.449-1,1-1h1h1h3h1H17z M13.5,1C14.879,1,16,2.121,16,3.5C16,4.879,14.879,6,13.5,6 S11,4.879,11,3.5C11,2.121,12.121,1,13.5,1">
                                                    </path>
                                                    <polygon points="15,13 14,13 14,9 13,9 12,9 12,10 13,10 13,13 12,13 12,14 13,14 14,14 15,14 	"></polygon>
                                                    <polygon points="7,14 7,13 5,13 5,12 6,12 7,12 7,10 7,9 6,9 4,9 4,10 6,10 6,11 5,11 4,11 4,12 4,13 4,14 5,14"></polygon>
                                                    <polygon points="20,10 22,10 22,11 21,11 21,12 22,12 22,13 20,13 20,14 22,14 23,14 23,13 23,12 23,11 23,10 23,9 22,9 20,9 	"></polygon>
                                                    <path d="M19.519,6.383C19.643,6.574,19.738,6.782,19.816,7H20h3h1h1c0.551,0,1,0.448,1,1v3h-1v-1h-1v9 h-2v-2v-1h-1v1v2h-2v-1.78c-0.289,0.26-0.627,0.463-1,0.595V26c0,0.553,0.447,1,1,1h5c0.553,0,1-0.447,1-1v-9c1.104,0,2-0.896,2-2 V8c0-1.105-0.896-2-2-2h-1h-0.056C24.594,5.364,25,4.48,25,3.5C25,1.567,23.434,0,21.5,0S18,1.567,18,3.5 c0,0.736,0.229,1.418,0.617,1.981C18.861,5.834,19.166,6.14,19.519,6.383 M19,20h2v6h-2V20z M24,26h-2v-6h2V26z M26,15 c0,0.552-0.449,1-1,1v-4h1V15z M21.5,1C22.879,1,24,2.121,24,3.5C24,4.879,22.879,6,21.5,6C20.121,6,19,4.879,19,3.5 C19,2.121,20.121,1,21.5,1"></path>
                                                </svg>
                                            </div>
                                            <div class="unit-body">
                                                <h6>Become A Player</h6><a class="link" href="mailto:#">team@demolink.org</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="unit unit-horizontal align-items-center">
                                            <div class="unit-left">
                                                <svg class="svg-sizing-35 svg-color-primary" x="0px" y="0px" width="72px" height="72px" viewbox="0 0 72 72">
                                                    <path d="M36.002,0c-0.41,0-0.701,0.184-0.931,0.332c-0.23,0.149-0.4,0.303-0.4,0.303l-9.251,8.18H11.58 c-1.236,0-1.99,0.702-2.318,1.358c-0.329,0.658-0.326,1.3-0.326,1.3v11.928l-8.962,7.936V66c0,0.015-0.038,1.479,0.694,2.972 C1.402,70.471,3.006,72,5.973,72h30.03h30.022c2.967,0,4.571-1.53,5.306-3.028c0.736-1.499,0.702-2.985,0.702-2.985V31.338 l-8.964-7.936V11.475c0,0,0.004-0.643-0.324-1.3c-0.329-0.658-1.092-1.358-2.328-1.358H46.575l-9.251-8.18 c0,0-0.161-0.154-0.391-0.303C36.703,0.184,36.412,0,36.002,0z M36.002,3.325c0.49,0,0.665,0.184,0.665,0.184l6,5.306h-6.665 h-6.665l6-5.306C35.337,3.51,35.512,3.325,36.002,3.325z M12.081,11.977h23.92H59.92v9.754v2.121v14.816L48.511,48.762 l-10.078-8.911c0,0-0.307-0.279-0.747-0.548s-1.022-0.562-1.684-0.562c-0.662,0-1.245,0.292-1.686,0.562 c-0.439,0.268-0.747,0.548-0.747,0.548l-10.078,8.911L12.082,38.668V23.852v-2.121v-9.754H12.081z M8.934,26.867v9.015 l-5.091-4.507L8.934,26.867z M63.068,26.867l5.091,4.509l-5.091,4.507V26.867z M69.031,34.44v31.559 c0,0.328-0.103,0.52-0.162,0.771L50.685,50.684L69.031,34.44z M2.971,34.448l18.348,16.235L3.133,66.77 c-0.059-0.251-0.162-0.439-0.162-0.769C2.971,66.001,2.971,34.448,2.971,34.448z M36.002,41.956c0.264,0,0.437,0.057,0.546,0.104 c0.108,0.047,0.119,0.059,0.119,0.059l30.147,26.675c-0.3,0.054-0.79,0.207-0.79,0.207H36.002H5.98H5.972 c-0.003,0-0.488-0.154-0.784-0.207l30.149-26.675c0,0,0.002-0.011,0.109-0.059C35.555,42.013,35.738,41.956,36.002,41.956z"></path>
                                                </svg>
                                            </div>
                                            <div class="unit-body">
                                                <h6>Contact Us</h6><a class="link" href="mailto:#">info@demolink.org</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- RD Navbar Search-->
                            <div class="rd-navbar-search">
                                <button class="rd-navbar-search-toggle" data-rd-navbar-toggle=".rd-navbar-search"><span></span></button>
                                <form class="rd-search" action="search-results.html" data-search-live="rd-search-results-live" method="GET">
                                    <div class="form-wrap">
                                        <label class="form-label" for="rd-navbar-search-form-input">Enter your search request here...</label>
                                        <input class="rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off">
                                        <div class="rd-search-results-live" id="rd-search-results-live"></div>
                                    </div>
                                    <button class="rd-search-form-submit fl-budicons-launch-search81" type="submit"></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rd-navbar-main-bottom">
                    <div class="rd-navbar-main-container container">
                        <!-- RD Navbar Nav-->
                        <ul class="rd-navbar-nav page-scroll">
                            <li class="rd-nav-item active">
                                <a class="rd-nav-link" href="/">Home</a>
                            </li>
                            <li class="rd-nav-item">
                                <a class="rd-nav-link" href="{{ route('about') }}">Nosotros</a>
                            </li>
                            <li class="rd-nav-item">
                                <a class="rd-nav-link" href="#">Categorías</a>
                                <ul class="rd-menu rd-navbar-dropdown">
                                    @foreach ($categories as $category)
                                    <li class="rd-dropdown-item">
                                        <a class="rd-dropdown-link" href="{{ route('product.index', $category->slug) }}">{{ $category->name }}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="rd-nav-item">
                                <a class="rd-nav-link" href="#clientes">Clientes</a>
                            </li>
                            <li class="rd-nav-item">
                                <a class="rd-nav-link" href="{{ route('contact') }}">Contacto</a>
                            </li>
                        </ul>
                        {{--
                        <div class="rd-navbar-main-element">
                            <ul class="list-inline list-inline-1">
                                <li><a class="icon icon-xs icon-light fa fa-facebook" href="#"></a></li>
                                <li><a class="icon icon-xs icon-light fa fa-twitter" href="#"></a></li>
                                <li><a class="icon icon-xs icon-light fa fa-google-plus" href="#"></a></li>
                                <li><a class="icon icon-xs icon-light fa fa-instagram" href="#"></a></li>
                            </ul>
                        </div>
                        --}}
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>