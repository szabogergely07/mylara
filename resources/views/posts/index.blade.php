@extends('layouts.app')

@section('content')
    <body>
            <div class="container">
                <div class="row well">
                        <div class="col-md-2 col-sm-2"><!--displays uploaded images...or noimage.jpg-->
                        </div>

                        <div class="col-md-8 col-sm-8">                           
                                <h1 id="post_title">Posts</h1>
                            @if (count($posts) > 0)
                                @foreach ($posts as $post)
                                <div id="post_index">
                                        <h3><a href="/mylara/public/posts/{{$post->id}}">{{$post->title}}</a></h3>
                                    <div>
                                        <img style="width:10%; height:10%" src="/mylara/public/storage/cover_images/{{$post->cover_image}}" alt="">
                                    </div>                                           
                                    <div class="post_details">
                                        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                                    </div>
                                </div>
                                @endforeach
                                    {{$posts->links()}}
                                @else
                                    <p>No posts found</p>
                            @endif
                        </div>                   

                        <div class="col-md-2 col-sm-2">
                        </div>                       
                </div>
            </div>
    </body>
@endsection