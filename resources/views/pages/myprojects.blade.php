@extends('layouts.app')<!--this calls the template from layouts.app
    ||(view folder)so only the content has to be changed-->
    @section('content')<!--starts a section where this below content 
        ||will be inserted-->
        <body>
        <div class="container">
                <div class="row">
                        <div class="col-md-2">
                                <h1>My <small>Projects</small></h1>
                        </div>
                        <div class="col-md-7">

                        </div>
                        <div class="col-md-3">
                                @include('inc.socialmedia')
                        </div>
                </div>
        </div>
        </body>
    @endsection