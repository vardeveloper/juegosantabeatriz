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
                                                <img src="{{ asset('html/images/WhatsApp.png') }}" width="32" />
                                            </div>
                                            <div class="unit-body">
                                                <h6>WhatsApp</h6><a class="link" href="#">{{ setting('site.mobile') }}</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="unit unit-horizontal align-items-center">
                                            <div class="unit-left">
                                                <span class="icon icon-primary icon-md mdi mdi-email"></span>
                                            </div>
                                            <div class="unit-body">
                                                <h6>Contacto</h6><a class="link" href="#">{{ setting('site.email') }}</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- RD Navbar Search-->
                            <div class="rd-navbar-search">
                                <button class="rd-navbar-search-toggle" data-rd-navbar-toggle=".rd-navbar-search"><span></span></button>
                                <form class="rd-search" action="{{ route('product.search') }}" data-search-live="rd-search-results-live" method="GET" lang="es">
                                    <div class="form-wrap">
                                        <label class="form-label" for="rd-navbar-search-form-input">Buscar productos</label>
                                        <input class="rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off" required>
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
                                    @foreach ($headerCategories as $category)
                                    <li class="rd-dropdown-item">
                                        <a class="rd-dropdown-link" href="{{ route('product.list', $category->slug) }}">{{ $category->name }}</a>
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
