@extends('layouts.app')<!--this calls the template from layouts.app
    ||(view folder)so only the content has to be changed-->
    @section('content')<!--starts a section where this below content 
        ||will be inserted-->
    <head>
        <h1>{{$title}}</h1><!--$title take place in PagesController it is good for an often used content-->
    </head>
    <body> 
        <div class="row">
            <div class="col-md-2">

            </div>
            <div class="col-md-7 jumbotron text center">
                @include('search.results')
            </div>
            <div class="col-md-3">
                <div class="btn-group mb-xl-5">
                    <a class="btn btn-primary btn-lg" href="/mylara/public/login" role="button">Login</a>
                    <a class="btn btn-success btn-lg" href="/mylara/public/register" role="button">Register</a>
                </div>
                @include('inc.socialmedia')
            </div>
    </body>
    @endsection