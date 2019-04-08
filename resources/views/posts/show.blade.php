@extends('layouts.app')

@section('content')
    <body>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <a href="/mylara/public/posts/" class="btn btn-warning">Go Back</a>
            </div>

            <div class="col-md-7">               
                <h1>{{$post->title}}</h1>
                <img style="width:40%" src="/mylara/public/storage/cover_images/{{$post->cover_image}}" alt="">
                <div>
                    {{$post->body}}
                </div>
                <div class="post_details">
                    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                </div>
            </div>

            <div class="col-md-3">
                <div class="row">
                    @if (!Auth::guest()) <!--if user is not a guest, cant see button below-->
                    @if(Auth::user()->id == $post->user_id) <!--if user id equal to post id(it is a users post!) able to edit it-->
                        <a href="/mylara/public/posts/{{$post->id}}/edit" class="btn btn-lg btn-info">Edit</a>

                        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete', ['class' => 'btn btn-sm btn-danger'])}}
                        {!!Form::close() !!}
                    @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
    </body>
@endsection