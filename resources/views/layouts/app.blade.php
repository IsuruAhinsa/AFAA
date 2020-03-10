<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" />
    <title>{{ config('app.name', 'AFAA') }}</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CMuli:400,700" rel="stylesheet">
    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/justifiedGallery.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@1.6.12/dist/css/lightgallery.min.css">
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    @stack('css')
    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>
<body>

    @include('partials.header')

    @yield('content')

    @include('partials.footer')

<!-- jQuery Plugins -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
<script type='text/javascript' src='{{ asset('js/swiper.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/custom.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/jquery.justifiedGallery.min.js') }}'></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery@1.6.12/dist/js/lightgallery-all.min.js"></script>
<script src="{{ asset('js/wow.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
@stack('script')
</body>
</html>
