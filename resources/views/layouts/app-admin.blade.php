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
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('/css/app-admin.css') }}">

</head>
<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
    <header class="app-header navbar">
        @include("includes.app-admin.navbar")
    </header>

    <div class="app-body">
        <!-- left sidebar -->
        <div class="sidebar">
            @include("includes.app-admin.left-sidebar")
        </div>

        <!-- Main content -->
        <main class="main">
            {{-- @include("includes.breadcrumb") --}}

            <div class="container-fluid mt-5">
                <div class="animated fadeIn">
                    @yield('content')
                </div>
            </div>
        </main>

        <!-- right sidebar -->
        {{-- <div id="aside-menu">
            @include("includes.app-admin.right-sidebar")
        </div> --}}
    </div>

    @include("includes.app-admin.footer")
    <script src="{{ mix('/js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{!! asset('js/pace.min.js') !!}"></script>
    <script src="{{ mix('/js/app-admin.js') }}"></script>
    <script ype="text/javascript" src="{!! asset('js/views/main.js') !!}"></script>
</body>
</html>