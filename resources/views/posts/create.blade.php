@extends('layouts.app')

@section('content')<!--to get form, need to install laravie html\form pack-->
<body>
        <div class="row">
                <div class="col-md-2 col-sm-2">
                </div>
                <div class="col-md-8 col-sm-8">
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
                                {{Form::file('cover_image')}}<!--laravel collective package-->
                        </div>
                        <div>
                                {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}<!--submit button displayed-->
                                {!! Form::close() !!}
                        </div>  
                </div>
                <div class="col-md-2 col-sm-2">      
                </div>
        </div>
</body>
@endsection