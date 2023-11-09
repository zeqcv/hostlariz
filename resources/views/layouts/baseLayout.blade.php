<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>HOSTLARIZ</title>

        <link rel="icon" href="{{asset('images/logo.png')}}" type="image/gif" sizes="16x16">
        <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
        <meta content="width=device-width, initial-scale=1.0" name="viewport" >
        <!--Meta Tags
        ==================================================-->
        @include('components/meta2')

        <!-- CSS Files
        ================================================== -->
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bootstrap">
        <link href="{{asset('css/plugins.css')}}" rel="stylesheet" type="text/css" >
        <link href="{{asset('css/swiper.css')}}" rel="stylesheet" type="text/css" >
        <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" >
        <link href="{{asset('css/coloring.css')}}" rel="stylesheet" type="text/css" >
        <!-- color scheme -->
        <link id="colors" href="{{asset('css/colors/scheme-01.css')}}" rel="stylesheet" type="text/css" >
        <meta http-equiv="X-Frame-Options" content="allow">
    

    </head>
    <body class="dark-scheme" style="background-size: cover; background-repeat: no-repeat;">
        <div id="wrapper" style="background-size: cover; background-repeat: no-repeat;">
            @include('components/Header')
            @include('components/Scroll/Text')
            @include('components/Scroll/Loader')
            @include('components/Loader')
            <div class="no-bottom no-top" id="content" style="background-size: cover; background-repeat: no-repeat;">
                <div id="top" style="background-size: cover; background-repeat: no-repeat;"></div>
            @yield('content')
            </div>
            @include('components/Footer')
        </div>

        <!-- Javascript Files
    ================================================== -->
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/designesia.js')}}"></script>
    <script src="{{asset('js/swiper.js')}}"></script>
    <script src="{{asset('js/custom-marquee.js')}}"></script>
    <script src="{{asset('js/custom-swiper-1.js')}}"></script>
    </body>
</html>
