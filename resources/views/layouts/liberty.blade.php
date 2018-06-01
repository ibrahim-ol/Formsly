<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Formsly') }}</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- plugins:css -->
        <link rel="stylesheet" href="{{ asset('liberty/vendors/iconfonts/mdi/css/materialdesignicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('liberty/vendors/iconfonts/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('liberty/vendors/css/vendor.bundle.base.css') }}">
        <link rel="stylesheet" href="{{ asset('liberty/vendors/css/vendor.bundle.addons.css') }}">
        <!-- endinject -->
        <!-- plugin css for this page -->
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="{{ asset('liberty/css/style.css') }}">
        <!-- endinject -->
        <link rel="shortcut icon" href="{{ asset('liberty/images/favicon.png') }}" />
    </head>
    <body @if(Session::has('success'))onload="showSwal('success-message')" @endif>
    <div class="container-scroller">

    @yield('content')

    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="{{ asset('liberty/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('liberty/vendors/js/vendor.bundle.addons.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ asset('liberty/js/template.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('liberty/js/dashboard.js') }}"></script>
    @yield('script')
    <!-- End custom js for this page-->
    </body>


</html>
