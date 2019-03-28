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
        </tbody>
    </table>
@endif