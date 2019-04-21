<!DOCTYPE html>
<html class="wide wow-animation" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Site Title-->
    <title>Home</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="{{ asset('html/images/favicon.ico') }}" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Kanit:300,400,500,500i,600%7CRoboto:400,900">
    <link rel="stylesheet" href="{{ asset('html/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('html/css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('html/css/style.css') }}" id="main-styles-link">
</head>

<body>
<style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
<div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
<div id="preloader">
    <div class="preloader-body">
        <div class="preloader-item"> </div>
    </div>
</div>
<!-- Page-->
<div class="page">
    <!-- Page Header-->
    @include('includes.header')

    <!-- Page Content-->
    @yield('content')

    <!-- Page Footer-->
    @include('includes.footer')

    <!-- Modal Video-->
    <div class="modal modal-video fade" id="modal1" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/vafBxDdRRRE"> </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- Global Mailform Output-->
<div class="snackbars" id="form-output-global"> </div>
<!-- Javascript-->
<script src="{{ asset('html/js/core.min.js') }}"></script>
<script src="{{ asset('html/js/script.js') }}"></script>
</body>

</html>
