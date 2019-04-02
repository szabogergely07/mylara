@extends('layouts.app')<!--this calls the template from layouts.app
    ||(view folder)so only the content has to be changed-->
    @section('content')<!--starts a section where this below content 
        ||will be inserted-->
        <body>
                <div class="container">
                        <div class="row">
                                <div class="col-md-4">
                                        @include('inc.socialmedia')
                                </div>
                                <div class="col-md-6">
                                        <h1>My <small>Projects</small></h1>
                                </div>
                                <div class="col-md-2">
                                        
                                </div>
                        </div>
                </div>
        </body>
    @endsection