<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"><!--refreshed app.blade made with ->php artisan make:auth-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('public/vendor/unisharp/laravel-ckeditor/ckeditor.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap-social.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            @include('inc.navbar')
            <div class="container py-5">
            @include('inc.messages')
            <!--messages will be included to all pages-->
            @yield('content')<!--this content will be changed
            || and the rest stays as long as layouts.app called -->
            </div>
        </div>
        <script type="text/javascript">
            CKEDITOR.replace( 'editor1' );
        </script>
    </body>
    <footer class="">
        @include('inc.footer')
    </footer>
</html>
