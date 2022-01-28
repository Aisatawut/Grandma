<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ร้านอาหารตามสั่งคุณยายต้อย</title>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('admin/js/jquery-1.11.2.min.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/flexslider.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/pricing.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/main.css') }}">

    <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/jquery.mixitup.min.js') }}"></script>
    <script src="{{ asset('admin/js/wow.min.js') }}"></script>
    <script src="{{ asset('admin/js/jquery.validate.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/jquery.hoverdir.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/jQuery.scrollSpeed.js') }}"></script>
    <script src="{{ asset('admin/js/script.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/jquery.flexslider.min.js') }}"></script>
</head>

<body data-spy="scroll" data-target="#template-navbar">

    @include('layouts/header_main')

    @yield('content')


</body>


</html>
