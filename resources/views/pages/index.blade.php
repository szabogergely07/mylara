@extends('layouts.app')<!--this calls the template from layouts.app
    ||(view folder)so only the content has to be changed-->
    @section('headsection')
        <head>
            <h1>{{$title}}</h1><!--$title take place in PagesController it is good for an often used content-->
        </head>
    @endsection
    @section('bodysection')
        <body> 
            <div class="row">
                <div class="col-md-2">
                </div>
                
                <div class="col-md-7 jumbotron text center">
                    <p>This is the first web application from Adam Gyarmati</p>
                </div>
                <div class="col-md-3">
                    <div class="btn-group mb-xl-5">
                        <a class="btn btn-primary btn-lg" href="/mylara/public/login" role="button">Login</a>
                        <a class="btn btn-success btn-lg" href="/mylara/public/register" role="button">Register</a>
                    </div>
                    <div>
                    @include('inc.socialmedia')
                    </div>
                </div>
            </div>
        </body>
    @endsection