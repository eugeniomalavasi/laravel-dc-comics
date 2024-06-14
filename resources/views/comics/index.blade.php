@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">I miei fumetti</h1>
        @foreach ($comics as $comic)
            <p><a href="{{ route('comics.show', ['comic' => $comic->id])}}">{{$comic->title}}</a></p>
        @endforeach
    
        <a href="{{route('comics.create')}}" class="btn btn-success">Aggiungi un fumetto</a>
    </div>

@endsection