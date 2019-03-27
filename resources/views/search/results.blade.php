@extends('layouts.app')<!--this calls the template from layouts.app
    ||(view folder)so only the content has to be changed-->
    @section('content')<!--starts a section where this below content 
        ||will be inserted-->
    <head>
    </head>
    <body> 
        <div class="row">
            <div class="col-md-2">

            </div>
            <div class="col-md-7 jumbotron text center">
                @php
                            //input field in search
                        $input = $_GET["name"]; 
                            //get content from page as string
                        $aboutcontent = file_get_contents('C:\xampp\htdocs\mylara\resources\views\pages\about.blade.php', true);
                            //search all matches for pattern in lowercase
                        $match = preg_match_all('/\b'. strtolower($input) .'\b/', strtolower($aboutcontent));

                            //if the input field is empty
                    if (empty($input)) {
                        echo "Please search for something";
                    }
                            //if there is no match 
                    elseif($match == 0){
                        echo "For the word: " .mb_strtoupper($input). " no match";    
                    }
                             //if there is a match
                    elseif($match == 1){
                            //find (canse insensitive)string in a string
                        $results = stristr($aboutcontent, $_GET["name"]);
                        echo "For the word: " .mb_strtoupper($input). " you have $match match" . "<br>";
                            //display the results in string from the 1st till 100 catarcter
                        echo substr($results, 0, 100)  . "....";
                    }
                            //if there is a match
                    else{
                            //find (canse insensitive)string in a string
                        $results = stristr($aboutcontent, $_GET["name"]);
                        echo "For the word: " .mb_strtoupper($input). " you have $match matches" . "<br>";
                            //display the results in string from the 1st till 100 catarcter
                        echo substr($results, 0, 100)  . "....";
                    }
                @endphp
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