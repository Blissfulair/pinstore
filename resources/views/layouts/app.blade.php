<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="page-home">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}  @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,600italic,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="{{ asset('css/components/font-awesome/css/font-awesome.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components/owl.carousel/dist/assets/owl.carousel.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components/jQuery.mmenu/dist/core/css/jquery.mmenu.all.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components/lightslider/dist/css/lightslider.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components/lightgallery/dist/css/lightgallery.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components/owl.carousel/dist/assets/owl.theme.default.min.css') }}">

  <!-- Slider -->
  <link rel="stylesheet" href="{{ asset('css/components/slider/css/settings.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components/slider/css/slider.css') }}">

  <link rel="stylesheet" href="{{ asset('css/css/main.css') }}">
  <script  src="{{ asset('css/components/jquery/dist/jquery.js') }}"></script>

  <!-- REVOLUTION JS FILES -->
  <script type="text/javascript" src="{{ asset('css/components/slider/js/jquery.themepunch.tools.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('css/components/slider/js/jquery.themepunch.revolution.min.js') }}"></script>

  <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
  <script type="text/javascript" src="{{ asset('css/components/slider/js/extensions/revolution.extension.actions.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('css/components/slider/js/extensions/revolution.extension.carousel.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('css/components/slider/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('css/components/slider/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('css/components/slider/js/extensions/revolution.extension.migration.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('css/components/slider/js/extensions/revolution.extension.navigation.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('css/components/slider/js/extensions/revolution.extension.parallax.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('css/components/slider/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('css/components/slider/js/extensions/revolution.extension.video.min.js') }}"></script>

    <!-- Styles -->
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
</head>
<body>
<div id="page" class="hfeed site">
  @include('includes.header')
        <main class="py-4">
            @yield('content')
        </main>
  @include('includes.footer')
</div>
  <script src="{{ asset('css/components/owl.carousel/dist/owl.carousel.js') }}"></script>
  <script src="{{ asset('css/components/countUp.js/dist/countUp.min.js') }}"></script>
  <script src="{{ asset('css/components/jQuery.mmenu/dist/core/js/jquery.mmenu.min.all.js') }}"></script>
  <script src="{{ asset('css/components/tether/tether.min.js') }}"></script><!-- Tether for Bootstrap -->
  <script src="{{ asset('css/components/bootstrap/dist/js/bootstrap.js') }}"></script>
  <script src="{{ asset('css/components/parallax.js/parallax.min.js') }}"></script>
  <script src="{{ asset('css/components/sliphover/src/jquery.sliphover.js') }}"></script>
  <script src="{{ asset('css/components/lightslider/dist/js/lightslider.min.js') }}"></script>
  <script src="{{ asset('css/components/lightgallery/dist/js/lightgallery.min.js') }}"></script>
  <script src="{{ asset('css/components/lightgallery/dist/js/lightgallery-all.min.js') }}"></script>

  <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
  <script src="{{ asset('js/js/vendor/gmap3.min.js') }}"></script>
  <script src="{{ asset('js/js/vendor/jquery.elevateZoom-3.0.8.min.js') }}"></script>

  <script src="{{ asset('js/js/main.js') }}"></script>
</body>
</html>
