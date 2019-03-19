<!doctype html><!--this is a main content, that will appear on all the pages-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>{{config('app.name', 'LSAPP')}}</title>
        <!-- index to this folder app name, if it is not there .env APP NAME-->
    </head>
    <body>
        @include('inc.navbar')
        <div class="container">
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
        @include('inc.messages')
        <!--messages will be included to all pages-->
        @yield('content')<!--this content will be changed
        || and the rest stays as long as layouts.app called -->
        </div>
        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'article-ckeditor' );
        </script>
    </body>
</html>
