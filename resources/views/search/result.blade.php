@extends('layouts.app')

 @section('content')
    <body>
        <div class="row">
            <div class="col-md-2">
            </div>
        
            <div class="col-md-7 jumbotron text center">
                    <h1>Results</h1>
                @if (isset($details))
                    <p> The Search result for your query <b> {{ $query }} </b> are: </p>
                    <h1>Details:</h1>
                    <table>
                        <thead>
                            <tr>
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
            </div>
            
            <div class="col-md-3">
            </div>
        </div>
    </body>
@endsection