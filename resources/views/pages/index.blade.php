@extends('layouts.app')<!--this calls the template from layouts.app
    ||(view folder)so only the content has to be changed-->
    @section('headsection')
        <head>
            <!--<h1>{{$title}}</h1>$title take place in PagesController it is good for an often used content-->
        </head>
    @endsection
    @section('bodysection')
        <body>
            <!--loading screen-->
            <div id="load_screen">
                <div class="lds-ring"><div></div><div></div><div></div><div></div></div>
                <div>Loading...</div>
            </div>
            
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        @include('inc.socialmedia')
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="wel_el">
                            <div id="line"></div>
                            <h5 id="w1">Welcome <br> to my <br> website</h5>
                            <h5 id="w2">Please <br> look <br> around!</h5>
                            <h5 id="w3">Explore every page!</h5>
                            <h5 id="w4">Create a post <br> if You like!</h5>
                            <h5 id="w5">Have fun here <br> and <br> have a good day!</h5>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">                    
                        <div class="mb-xl-5 float-right d-none d-lg-block">
                            <a class="btn btn-primary btn-sm" href="/mylara/public/login" role="button">Login</a>
                            <a class="btn btn-success btn-sm" href="/mylara/public/register" role="button">Register</a>
                        </div>
                            
                    </div>
                </div>
            </div>
        </body>
    @endsection