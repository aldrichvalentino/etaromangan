<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} |  @yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.min.css') }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body data-spy="scroll" data-target="#ftco-navbar" data-offset="200">
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        @include('includes.app.navbar')
    </nav>

    <div id="content">
        @yield('content')
    </div>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
        @include('includes.app.footer')
    </footer>

    <div id="ftco-loader" class="show fullscreen">
        @include('includes.app.loader')
    </div>
    <!-- Scripts -->
    <script src="{{ mix('/js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{!! asset('js/jquery.easing.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/jquery.waypoints.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/jquery.magnific-popup.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/bootstrap-datepicker.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/jquery.timepicker.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/owl.carousel.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/jquery.animateNumber.min.js') !!}"></script>
    <script type="text/javascript" src="{{ mix('/js/app.js') }}"></script>
    @yield('script')
</body>
</html>
