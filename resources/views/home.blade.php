@extends('layouts.app')

@section('content')
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2">
        </div>
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                            <a href="/mylara/public/posts/create" class="btn btn-primary">Create Post</a>
                            <h3>Your Blog Post</h3>
                    @if (count($posts) > 0)
                            <table class="table table-striped">
                                    <tr>
                                        <th>Title</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>{{$post->title}}</td>
                                        <td><a href="/mylara/public/posts/{{$post->id}}/edit" class="btn btn-secondary">Edit</a></td>
                                        <td>
                                                {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                                {{Form::hidden('_method', 'DELETE')}}
                                                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                                {!!Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        @else
                            <p>You have no posts</p>
                        @endif
                </div>
            </div>
        </div>

        <div class="col-md-2">
        </div>
    </div>
</div>
</body>
@endsection
