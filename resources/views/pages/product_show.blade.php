@extends('layouts.app')

@section('content')

    <!-- Section Breadcrumbs-->
    <section class="section parallax-container breadcrumbs-wrap" data-parallax-img="images/bg-breadcrumbs-1-1920x726.jpg">
        <div class="parallax-content breadcrumbs-custom context-dark">
            <div class="container">
                <h3 class="breadcrumbs-custom-title">{{ $product->name }}</h3>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="{{ route('product.show', $product->slug) }}">Producto</a></li>
                    <li class="active">{{ $product->name }}</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Shop Blocks, Elements-->
    <section class="section section-md bg-gray-100">
        <div class="container">
            <!-- Product - single build-->
            <article class="product-single">
                <div class="product-single-figure">
                    <!-- Owl Carousel-->
                    <div class="owl-carousel" data-items="1" data-start-position="1" data-autoplay="true" data-autoplay-hover-pause="true" data-autoplay-speed="800" data-drag-end-speed="800" data-dots="true" data-loop="true" data-dots-speed="800" data-stage-padding="0" data-margin="0" data-mouse-drag="true">
                        @foreach($product->imagenes as $image)
                        <img src="{{ Voyager::image($image) }}" alt="">
                        @endforeach
                    </div>
                </div>
                <div class="product-single-main">
                    <div class="product-single-title heading-4">{{ $product->name }}</div>
                    <div class="product-single-meta">
                        <ul class="list-inline list-inline-xs">
                            <li>
                                <ul class="list-inline">
                                    <li class="product-single-price-new heading-4"><span>s/{{ $product->price }}</span></li>
                                    <!--li class="product-single-price-old"><span>$400</span></li-->
                                </ul>
                            </li>
                            <!--li>
                                <ul class="product-single-rating">
                                    <li><span class="material-icons-star"></span></li>
                                    <li><span class="material-icons-star"></span></li>
                                    <li><span class="material-icons-star"></span></li>
                                    <li><span class="material-icons-star"></span></li>
                                    <li><span class="material-icons-star_half"></span></li>
                                </ul>
                            </li-->
                        </ul>
                    </div>
                    <div class="product-single-text">
                        <p>{{ $product->excerpt }}</p>
                    </div>
                    <!--ul class="product-single-info">
                        <li>
                            <ul class="list-inline list-inline-middle">
                                <li><span class="product-radio-title">Size</span></li>
                                <li>
                                    <ul class="list-inline list-inline-xxs">
                                        <li>
                                            <label class="radio-inline input-refilter">
                                                <input name="input-radio-size" value="size-m" type="radio" checked><span>M</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="radio-inline input-refilter">
                                                <input name="input-radio-size" value="size-l" type="radio"><span>L</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="radio-inline input-refilter">
                                                <input name="input-radio-size" value="size-xl" type="radio"><span>XL</span>
                                            </label>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <ul class="list-inline list-inline-middle">
                                <li><span class="product-radio-title">Color</span></li>
                                <li>
                                    <ul class="list-inline list-inline-xxs">
                                        <li>
                                            <label class="radio-inline input-filter">
                                                <input name="input-radio-color" value="color-1" type="radio" checked>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="radio-inline input-filter input-filter-dark">
                                                <input name="input-radio-color" value="color-2" type="radio">
                                            </label>
                                        </li>
                                        <li>
                                            <label class="radio-inline input-filter input-filter-deco">
                                                <input name="input-radio-color" value="color-3" type="radio">
                                            </label>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <ul class="list-inline list-inline-middle">
                                <li><span class="product-radio-title">Quantity</span></li>
                                <li>
                                    <div class="stepper-modern">
                                        <input class="form-input" type="number" data-zeros="true" value="1" min="1" max="100">
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul-->
                    <!--ul class="product-list-buttons">
                        <li>
                            <a class="button button-primary button-icon button-icon-left" href="shopping-cart.html">
                                <span class="icon fl-bigmug-line-shopping202"></span><span>Add to cart</span>
                            </a>
                        </li>
                        <li>
                            <div class="product-list-share focus-toggle-parent">
                                <span class="product-list-share-btn focus-toggle fl-bigmug-line-share27"></span>
                                <ul>
                                    <li><span>Share</span></li>
                                    <li><a class="icon icon-xs fa fa-facebook" href="#"></a></li>
                                    <li><a class="icon icon-xs fa fa-instagram" href="#"></a></li>
                                    <li><a class="icon icon-xs fa fa-twitter" href="#"></a></li>
                                    <li><a class="icon icon-xs fa fa-google-plus" href="#"></a></li>
                                </ul>
                            </div>
                        </li>
                    </ul-->
                </div>
            </article>
            <!-- Bootstrap tabs-->
            <div class="tabs-custom tabs-horizontal tabs-corporate product-single-additional">
                <!-- Nav tabs-->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item" role="tab"><a class="nav-link active" href="#tabs-product-1" data-toggle="tab">Detalle</a></li>
                    <!--li class="nav-item" role="tab"><a class="nav-link" href="#tabs-product-2" data-toggle="tab">customer reviews</a></li-->
                </ul>
                <!-- Tab panes-->
                <div class="tab-content">
                    <div class="tab-pane active show fade" id="tabs-product-1" role="tabpanel">
                        {!! $product->description !!}
                    </div>
                    <!--div class="tab-pane fade" id="tabs-product-2" role="tabpanel">
                        <div class="product-comment">
                            <div class="product-comment-aside"><img class="img-circle" src="images/shop/thumb-1.jpg" width="66" height="66" alt=""></div>
                            <div class="product-comment-main">
                                <div class="product-comment-main-header">
                                    <div class="product-comment-title heading-5"><span>Emma peterson</span></div>
                                    <div class="product-comment-time"><span>2 days ago</span></div>
                                    <ul class="product-comment-rating">
                                        <li><span class="material-icons-star"></span></li>
                                        <li><span class="material-icons-star"></span></li>
                                        <li><span class="material-icons-star"></span></li>
                                        <li><span class="material-icons-star"></span></li>
                                        <li><span class="material-icons-star_half"></span></li>
                                    </ul>
                                </div>
                                <div class="product-comment-main-footer">
                                    <p>The product you delivered me has surpassed all my expectations. The item is one of the best, all-purpose items ever crafted. I love everything about my purchase. I have had a lot of such kind of items in my life, so it’s easy for me to compare and write this positive feedback. Reliable, secure, quirky, easy to clean in and out. My kinda stuff. I purchased it, used privately, nothing's gone wrong with it, it’s pretty easy to service yourself.</p>
                                </div>
                            </div>
                        </div>
                        <div class="product-comment">
                            <div class="product-comment-aside"><img class="img-circle" src="images/shop/thumb-2.jpg" width="66" height="66" alt=""></div>
                            <div class="product-comment-main">
                                <div class="product-comment-main-header">
                                    <div class="product-comment-title heading-5"><span>Erika wood</span></div>
                                    <div class="product-comment-time"><span>2 days ago</span></div>
                                    <ul class="product-comment-rating">
                                        <li><span class="material-icons-star"></span></li>
                                        <li><span class="material-icons-star"></span></li>
                                        <li><span class="material-icons-star"></span></li>
                                        <li><span class="material-icons-star"></span></li>
                                        <li><span class="material-icons-star_half"></span></li>
                                    </ul>
                                </div>
                                <div class="product-comment-main-footer">
                                    <p>This saves so much time! Don't know how I managed without it before. First time use recently, have now used the item several times - a great way to have instant results. Great value, easy to follow instructions. I read the reviews and was pleased to see such positive reports of this company. I checked the website, prices looked very good, I could get service in my area. The communication is top notch, and the service has been good.</p>
                                </div>
                            </div>
                        </div>
                    </div-->
                </div>
            </div>
        </div>
    </section>

@endsection
