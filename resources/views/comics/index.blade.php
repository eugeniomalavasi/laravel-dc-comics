@extends('layouts.app')

@section('content')
    <h1>Home page</h1>
    @foreach ($comics as $comic)
        <p>{{$comic->title}}</p>
    @endforeach
@endsection