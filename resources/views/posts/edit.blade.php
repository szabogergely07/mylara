@extends('layouts.app')<!--here able to edit posts-->

@section('content')<!--to get form, need to install laravie html\form pack-->
<h1>Edit Post</h1>
{!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
<!--action goes into array: choose post by id for update-->
    <div class="form-group"><!--bootstrap form calss-->
        {{Form::label('title', 'Title')}}<!--label required in postscontroll-->
        {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div><!--here is a text field displayed-->
    <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', $post->body, ['id' => 'editor1', 'class' => 'form-control', 'placeholder' => 'Text'])}}
    </div>
    <div class="form-group">
            {{Form::file('cover_image')}}<!--laravel collective package used here-->
    </div>

    {{Form::hidden('_method', 'PUT')}}<!--hidden method send changes to posts page-->
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}<!--submit button displayed-->
{!! Form::close() !!}
@endsection