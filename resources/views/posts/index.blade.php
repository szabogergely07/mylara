@extends('layouts.app')

@section('content')
    <body>
            <div class="container">
                <div class="row well">
                        <div class="col-md-2 col-sm-2"><!--displays uploaded images...or noimage.jpg-->
                        </div>

                        <div class="col-md-8 col-sm-8">
                                <h1>Posts</h1>
                            @if (count($posts) > 0)
                                @foreach ($posts as $post)
                                    <h3><a href="/mylara/public/posts/{{$post->id}}">{{$post->title}}</a></h3>
                                    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                                @endforeach
                                    {{$posts->links()}}
                                @else
                                    <p>No posts found</p>
                            @endif
                                <img style="width:30%" src="/mylara/public/storage/cover_images/{{$post->cover_image}}" alt="">
                        </div><!--add time and ->name from user, under the post-->                     
                        
                        <div class="col-md-2 col-sm-2">
                        </div>                       
                </div>
            </div>
    </body>
@endsection