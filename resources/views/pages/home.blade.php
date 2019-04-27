@extends('layouts.app')

@section('content')

<!-- Swiper-->
<section class="section swiper-container swiper-slider swiper-corporate bg-gray-2" data-loop="true" data-autoplay="4000" data-simulate-touch="true" data-slide-effect="fade">
    <div class="swiper-wrapper">
        @foreach ($banners as $banner)
        <div class="swiper-slide" data-slide-bg="{{ Voyager::image($banner->thumbnail('cropped')) }}">
            {{--
            <div class="container">
                <div class="swiper-slide-caption">
                    <h2 data-caption-animate="fadeInLeftSmall">Meet the New World Champion</h2>
                    <h5 class="heading-decoration-2" data-caption-animate="fadeInLeftSmall" data-caption-delay="200">Ron Gray, the winner of Betfred World Championship 2018</h5>
                    <a class="button button-gray-outline" data-caption-animate="fadeInLeftSmall" data-caption-delay="400" href="about-us.html">Read More</a>
                </div>
            </div>
            --}}
        </div>
        @endforeach
    </div>
    <div class="swiper-pagination swiper-pagination-vertical" data-index-bullet="true"></div>
</section>

<!-- Latest News-->
<section class="section section-md bg-gray-100">
    <div class="container">
        <div class="row row-50">
            @foreach ($data['categorias'] as $category)
            <div class="col-lg-12">
                <div class="main-component">
                    <!-- Heading Component-->
                    <article class="heading-component">
                        <div class="heading-component-inner">
                            <h5 class="heading-component-title">{{ $category['name'] }}</h5>
                            <a class="button button-xs button-gray-outline" href="{{ route('product.list', $category['slug']) }}">Ver más</a>
                        </div>
                    </article>
                    <div class="row row-30">
                        @if (!empty($category['productos']))
                        @foreach ($category['productos'] as $product)
                        <div class="col-md-6 col-lg-3">
                            <article class="product product-sm">
                                <header class="product-header">
                                    <!--div class="badge badge-red">hot<span class="icon material-icons-whatshot"></span></div-->
                                    <div class="product-figure"><img src="{{ asset("storage/$product[small]") }}" alt=""/></div>
                                    <div class="product-buttons">
                                        <!--div class="product-button product-button-share fl-bigmug-line-share27" style="font-size: 22px">
                                            <ul class="product-share">
                                                <li class="product-share-item"><span>Share</span></li>
                                                <li class="product-share-item"><a class="icon fa fa-facebook" href="#"></a></li>
                                                <li class="product-share-item"><a class="icon fa fa-instagram" href="#"></a></li>
                                                <li class="product-share-item"><a class="icon fa fa-twitter" href="#"></a></li>
                                                <li class="product-share-item"><a class="icon fa fa-google-plus" href="#"></a></li>
                                            </ul>
                                        </div-->
                                        <!--a class="product-button fl-bigmug-line-shopping202" href="shopping-cart.html" style="font-size: 26px"></a-->
                                        <a class="product-button fl-bigmug-line-zoom60" href="{{ Voyager::image($product['image']) }}" data-lightgallery="item" style="font-size: 25px"></a>
                                    </div>
                                </header>
                                <footer class="product-content">
                                    <h6 class="product-title">
                                        <a href="product-page.html">{{ $product['name'] }}</a>
                                    </h6>
                                    <div class="product-price">
                                        <!--span class="product-price-old">$400</span-->
                                        <span class="heading-6 product-price-new">s/{{ $product['price'] }}</span>
                                    </div>
                                    <!--ul class="product-rating">
                                        <li><span class="material-icons-star"></span></li>
                                        <li><span class="material-icons-star"></span></li>
                                        <li><span class="material-icons-star"></span></li>
                                        <li><span class="material-icons-star"></span></li>
                                        <li><span class="material-icons-star_half"></span></li>
                                    </ul-->
                                </footer>
                            </article>
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection