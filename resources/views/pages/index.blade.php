@extends('layouts.app')<!--this calls the template from layouts.app
    ||(view folder)so only the content has to be changed-->
    @section('headsection')
        <head>
            <!--<h1>{{$title}}</h1>$title take place in PagesController it is good for an often used content-->
        </head>
    @endsection
    @section('bodysection')
        <body> 
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        @include('inc.socialmedia')
                        <div class="contact border border-primary rounded d-none d-md-block">
                            <p>Contact</p>
                            
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-2">                    
                        <div class="mb-xl-5 float-right d-none d-lg-block">
                            <a class="btn btn-primary btn-sm" href="/mylara/public/login" role="button">Login</a>
                            <a class="btn btn-success btn-sm" href="/mylara/public/register" role="button">Register</a>
                        </div>
                            
                    </div>
                </div>
            </div>
        </body>
    @endsection