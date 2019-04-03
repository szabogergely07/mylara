<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"><!--refreshed app.blade made with ->php artisan make:auth-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/custom.js') }}" defer></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
        

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap-social.css') }}" rel="stylesheet">
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
        

    </head>
    <header>
        @yield('headsection')
        @include('inc.navbar')
    </header>
    <body>

        @include('inc.messages')
        @yield('content')
        @yield('bodysection')

    </body>
    <footer class="">
        @include('inc.footer')
    </footer>
</html>
