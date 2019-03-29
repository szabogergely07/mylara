@extends('layouts.app')<!--this calls the template from layouts.app
    ||(view folder)so only the content has to be changed-->
    @section('content')<!--starts a section where this below content 
        ||will be inserted-->
        <body>
        <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-7">
                        <h1>About <small>me</small></h1>
                        <img src={{ asset('images/aboutme.jpg') }} class="img-fluid" alt="Responsive image">
                        <p class="text-justify">
                                My name is Adam…Adam Gyarmati.
                                No, it is not like James Bond, because I am not a secret agent. 
                                I do not even kill people. The only business I have with this theme, 
                                is that I really like Bond movies!
                                Actually, I like all kinds of movies; just as sport in general, 
                                friends but the most I love is my Wife and my Family.
                                In the summer of 2018 I decided to start a new 
                                career – following the example of my friend – in web-development. 
                                And now, couple of months and courses later here I am, writing my 
                                own website’s ‘About me’ page. Hopefully, I will become a useful 
                                member of an amazing developer team. Actually, it is not a hope: 
                                only a matter of time and hard work.
                                At the beginning, coding just seemed an interesting thing but as 
                                I have immersed myself in this topic, it became love. Love, 
                                which I wake up and go to sleep with. It amases me, what CSS is capable of 
                                ; what Javascript can do with a simple HTML file; how PHP cooperates with an 
                                SQL database. And the funny thing is, that I still haven’t seen much of it. 
                                Let’s do it then!
                                </p>
                </div>
                <div class="col-md-3">
                        
                </div>
        </div>
        </body>
    @endsection