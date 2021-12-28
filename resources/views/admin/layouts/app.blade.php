<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ร้านอาหารคามสั่งคุณยายต้อย</title>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Scripts -->






        <script src="{{ asset( 'admin/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset( 'admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset( 'admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
        <script src="{{ asset ( 'admin/js/ruang-admin.min.js') }}"></script>
        <script src="{{ asset ( 'admin/vendor/chart.js/Chart.min.js') }}"></script>
        <script src="{{ asset ( 'admin/js/demo/chart-area-demo.js') }}"></script>


  <link href="{{ asset( 'admin/vendor/fontawesome-free/css/all.min.css') }}"    rel="stylesheet" type="text/css">
  <link href="{{ asset( 'admin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset( 'admin/css/ruang-admin.min.css') }}" rel="stylesheet">


    </head>
    <body id="page-top">
        <div id="wrapper">

        @include('admin/layouts/sidebar')
 <!-- Sidebar -->
 <div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
      <!-- TopBar -->

      @include('admin/layouts/header')

        @yield('content')

    </body>
</html>
