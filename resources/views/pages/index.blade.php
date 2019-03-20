@extends('layouts.app')<!--this calls the template from layouts.app
    ||(view folder)so only the content has to be changed-->
    @section('content')<!--starts a section where this below content 
        ||will be inserted-->
        <h1>{{$title}}</h1><!--$title take place in PagesController
        ||it is good for an often used content-->
        <div class="jumbotron text center">
            <h1>Welcome here!</h1>
            <p>This is the first web application from Adam Gyarmati</p>
            <p><a class="btn btn-primary btn lg" href="mylara/public/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/mylara/public/register" role="button">Register</a></p>
        </div>
    
    
    
    
    @endsection