@extends('layouts.app')

@section('content')<!--to get form, need to install laravie html\form pack-->
<h1>Create Post</h1><!--see below: whenever subit a file, need to have an enctype attribute in form-->
{!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group"><!--bootstrap form calss-->
        {{Form::label('title', 'Title')}}<!--label required in postscontroll-->
        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div><!--here is a text field displayed-->
    <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '', ['id' => 'editor1', 'class' => 'form-control', 'placeholder' => 'Text'])}}
    </div>
    <div class="form-group">
            {{Form::file('cover_image')}}<!--laravel collective package used here-->
    </div>
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}<!--submit button displayed-->
{!! Form::close() !!}
@endsection