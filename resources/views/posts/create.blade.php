@extends('layouts.app')

@section('content')
<h1>Create Post</h1>
<form action="store" method="post">
        @csrf
        @method('PUT')
    <input type="text" name="title">
    <input type="text" name="body">
    <button type="submit">Submit</button>
</form>
@endsection