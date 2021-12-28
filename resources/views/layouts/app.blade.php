<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ananta</title>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Scripts -->
        <script src="{{ asset('promote/js/jquery-1.11.2.min.js') }}" defer></script>
        <script type="text/javascript" src="{{ asset('promote/js/jquery.flexslider.min.js') }}"></script>
        <script type="text/javascript">
            $(window).load(function() {
                $('.flexslider').flexslider({
                 animation: "slide",
                 controlsContainer: ".flexslider-container"
                });
            });
        </script>

        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script>
            function initialize() {
                var mapCanvas = document.getElementById('map-canvas');
                var mapOptions = {
                    center: new google.maps.LatLng(24.909439, 91.833800),
                    zoom: 16,
                    scrollwheel: false,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                }
                var map = new google.maps.Map(mapCanvas, mapOptions)

                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(24.909439, 91.833800),
                    title:"Mamma's Kitchen Restaurant"
                });

                // To add the marker to the map, call setMap();
                marker.setMap(map);
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>



        <script src="{{ asset('promote/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('promote/js/owl.carousel.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('promote/js/jquery.mixitup.min.js') }}" ></script>
        <script src="{{ asset('promote/js/wow.min.js') }}"></script>
        <script src="{{ asset('promote/js/jquery.validate.js') }}"></script>
        <script type="text/javascript" src="{{ asset('promote/js/jquery.hoverdir.js') }}"></script>
        <script type="text/javascript" src="{{ asset('promote/js/jQuery.scrollSpeed.js') }}"></script>
        <script src="{{ asset('promote/js/script.js') }}"></script>






        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
        <!-- Font Awesome -->
        {{-- <link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.min.css')}}"> --}}
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('promote/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('promote/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('promote/css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('promote/css/owl.theme.css') }}">
        <link rel="stylesheet" href="{{ asset('promote/css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('promote/css/flexslider.css') }}">
        <link rel="stylesheet" href="{{ asset('promote/css/pricing.css') }}">
        <link rel="stylesheet" href="{{ asset('promote/css/main.css') }}">
        <!-- CDN -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    </head>
    <body  data-spy="scroll" data-target="#template-navbar">

        @include('layouts/header_main')
        @yield('content')

    </body>
</html>
