@extends('layouts.app')

@section('content')
<a href="/mylara/public/posts/" class="btn btn-default">Go Back</a>
<h1>{{$post->title}}</h1>
<img style="width:100%" src="/mylara/public/storage/cover_images/{{$post->cover_image}}" alt="">
<br>
<br>
<div>
    {{$post->body}}
</div>
<hr>
<small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
<hr>
    @if (!Auth::guest()) <!--if user is not a guest, cant see below button-->
        @if(Auth::user()->id == $post->user_id) <!--if user id equal to post id(it is a users post!) able to edit it-->
            <a href="/mylara/public/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close() !!}
        @endif
    @endif
@endsection