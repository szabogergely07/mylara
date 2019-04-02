@extends('layouts.app')

@section('content')
<body>
<div class="container">
    <div class="row">
        <div class="col-md-2 col-sm-2">
        </div>
        <div class="col-md-8 col-sm-8">
            <h1>Edit Post</h1>
            {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <!--action goes into array: choose post by id for update-->
                <div class="form-group">
                    {{Form::label('title', 'Title')}}<!--label required in postscontroll-->
                    {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
                </div><!--here is a text field displayed-->
                <div class="form-group">
                    {{Form::label('body', 'Body')}}
                    {{Form::textarea('body', $post->body, ['id' => 'editor1', 'class' => 'form-control', 'placeholder' => 'Text'])}}
                </div>
                <div class="form-group">
                    {{Form::file('cover_image')}}
                </div>

                    {{Form::hidden('_method', 'PUT')}}<!--hidden method send changes to posts page-->
                    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}<!--submit button displayed-->
                    {!! Form::close() !!}
        </div>
        <div class="col-md-2 col-sm-2">
    </div>
</div>
</body>
@endsection