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
                                        <div class="project_embed">
                                                <a href="http://footballstore.unaux.com/">
                                                <img src={{ asset('images/footballshop.jpg') }} class="projectimg img-fluid" alt="Responsive image">
                                                <div class="project_description">
                                                        <div class="project_text">  
                                                                <h2>Football-Shop</h2>
                                                                <p>Wordpress, CSS, Javascript, PHP</p>
                                                        </div>
                                                </div>
                                                </a>
                                        </div>
                                        <div class="project_embed">
                                                <a href="http://adamgyarmati.unaux.com">
                                                <img src={{ asset('images/portfolio.jpg') }} class="projectimg img-fluid" alt="Responsive image">   
                                                <div class="project_description">
                                                        <div class="project_text">
                                                                <h2>Portfolio</h2>
                                                                <p>Wordpress, CSS, Javascript, PHP</p>
                                                        </div>
                                                </div>
                                                </a>
                                        </div>
                                </div>
                                <div class="col-md-2">
                                        
                                </div>
                        </div>
                </div>
        </body>
    @endsection