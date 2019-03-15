@extends('layouts.app')<!--this calls the template from layouts.app
    ||(view folder)so only the content has to be changed-->
    @section('content')<!--starts a section where this below content 
        ||will be inserted-->
    <h1>{{$title}}</h1>
    @if(count($services) > 0) <!--count() function returns
        ||the number of elements in an array.
        ||in that case all the elements-->
        <ul class="list-group">
            @foreach ($services as $service)<!--loop trough-->
                <li class="list-group-item">{{$service}}</li>
             @endforeach
        </ul>
    @endif
    @endsection