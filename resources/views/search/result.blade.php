@extends('layouts.app')

 @section('content')
    <body>
        <div class="container">
        <div class="row">
            <div class="col-md-2">
            </div>
        
            <div id="result" class="col-md-8">
                    <h1>Results:</h1>
                @if (isset($details))
                <!--<p> The search results for <b> {{ $query }} </b> are: </p>-->
                    <table>
                        <thead>
    <!--search for user-->  <tr>
                                <th>Name</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($details as $user)
                                <tr>
                                    <td> {{ $user->name }} </td>
                                    <td> {{ $user->email }} </td>
                                </tr>                               
                            @endforeach
                            @elseif(isset( $message ))
                            <p> {{ $message }} </p>
                        </tbody>
                    </table>
                @endif

                @if (isset($details2))
                    <table>
                        <thead>
    <!--search for Post-->  <tr>
                                <th>Title</th><br>
                                <th>Post</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($details2 as $post)
                                <tr>
                                    <td> {{ $post->title }} </td>
                                    <td> {{ $post->body }} </td>
                                </tr>
                            @endforeach
                            @elseif(isset( $message2 ))
                            <p> {{ $message2 }} </p>
                            @elseif(isset( $message3 ))
                            <p> {{ $message3 }} </p>
                        </tbody>
                    </table>
                @endif
            </div>
          
            <div class="col-md-2">
            </div>
        </div>
    </div>
    </body>
@endsection