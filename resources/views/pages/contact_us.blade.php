@extends('layouts.app')

@section('content')

    <!-- Section Breadcrumbs-->
    <section class="section parallax-container breadcrumbs-wrap" data-parallax-img="images/bg-breadcrumbs-1-1920x726.jpg">
        <div class="parallax-content breadcrumbs-custom context-dark">
            <div class="container">
                <h3 class="breadcrumbs-custom-title">Contact Us</h3>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Contact Us</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Section Contact-->
    <section class="section section-variant-1 bg-gray-100">
        <div class="container">
            <div class="row row-50">
                <div class="col-lg-7 col-xl-8">
                    <!-- Heading Component-->
                    <article class="heading-component">
                        <div class="heading-component-inner">
                            <h5 class="heading-component-title">Get in touch
                            </h5>
                        </div>
                    </article>

                    <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                        <div class="row row-10 row-narrow">
                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <label class="form-label" for="form-user-name-1">Your Name</label>
                                    <input class="form-input" id="form-user-name-1" type="text" name="name" data-constraints="@Required">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <label class="form-label" for="form-user-phone">Phone</label>
                                    <input class="form-input" id="form-user-phone" type="text" name="phone" data-constraints="@Numeric @Required">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-wrap">
                                    <label class="form-label" for="form-message">Message</label>
                                    <textarea class="form-input" id="form-message" name="message" data-constraints="@Required"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <label class="form-label" for="form-email">E-mail</label>
                                    <input class="form-input" id="form-email" type="email" name="email" data-constraints="@Email @Required">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <button class="button button-lg button-primary button-block" type="submit">Send message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-5 col-xl-4">
                    <!-- Heading Component-->
                    <article class="heading-component">
                        <div class="heading-component-inner">
                            <h5 class="heading-component-title">Contact Details
                            </h5>
                        </div>
                    </article>

                    <div class="contact-list">
                        <dl>
                            <dt>E-mail</dt>
                            <dd><span class="icon icon-primary mdi mdi-email-outline"></span><a class="link" href="mailto:#">info@demolink.org</a></dd>
                        </dl>
                        <dl>
                            <dt>Address</dt>
                            <dd><span class="icon icon-primary mdi mdi-map-marker"></span><a class="link" href="#">71 Pilgrim Avenue Chevy Chase, MD 20815</a></dd>
                        </dl>
                        <dl>
                            <dt>Phone</dt>
                            <dd><span class="icon icon-primary mdi mdi-phone"></span><a class="link link-md" href="tel:#">+34 91 398 43 00</a></dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Google map search-->
    <!-- RD Google Map-->
    <section>
        <div class="google-map-container" data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-styles="[{&quot;featureType&quot;:&quot;all&quot;,&quot;elementType&quot;:&quot;labels.text.fill&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:36},{&quot;color&quot;:&quot;#333333&quot;},{&quot;lightness&quot;:40}]},{&quot;featureType&quot;:&quot;all&quot;,&quot;elementType&quot;:&quot;labels.text.stroke&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:16}]},{&quot;featureType&quot;:&quot;all&quot;,&quot;elementType&quot;:&quot;labels.icon&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#fefefe&quot;},{&quot;lightness&quot;:20}]},{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#fefefe&quot;},{&quot;lightness&quot;:17},{&quot;weight&quot;:1.2}]},{&quot;featureType&quot;:&quot;landscape&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f2f2f2&quot;},{&quot;lightness&quot;:&quot;0&quot;}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#d6d7de&quot;},{&quot;lightness&quot;:&quot;0&quot;}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#d6d7de&quot;},{&quot;lightness&quot;:&quot;0&quot;}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:17}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:29},{&quot;weight&quot;:0.2}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:18}]},{&quot;featureType&quot;:&quot;road.local&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:16}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f2f2f2&quot;},{&quot;lightness&quot;:19}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#b9c1c8&quot;},{&quot;lightness&quot;:&quot;0&quot;}]}]">
            <div class="google-map"></div>
            <ul class="google-map-markers">
                <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-description="9870 St Vincent Place, Glasgow" data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png"> </li>
            </ul>
        </div>
    </section>

@endsection