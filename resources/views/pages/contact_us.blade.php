@extends('layouts.app')

@section('content')

    <!-- Section Breadcrumbs-->
    <section class="section parallax-container breadcrumbs-wrap" data-parallax-img="{{ asset('html/images/bg-breadcrumbs-1-1920x726.jpg') }}">
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

                    <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="{{ route('sendmail') }}">
                        <div class="row row-10 row-narrow">
                            @csrf
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
                                    <textarea class="form-input" id="form-message" name="msg" data-constraints="@Required"></textarea>
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

    <!--Leaflet map-->
    <div style="height: 450px; width: 100%; display: grid">
        <div id="map-canvas"></div>
    </div>

@endsection

@push('head-map')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==" crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js" integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg==" crossorigin=""></script>
@endpush

@push('scripts-map')
<script src="{{ asset('html/js/map.js') }}"></script>
@endpush