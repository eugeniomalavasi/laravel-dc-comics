@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center mb-3">I MIEI FUMETTI</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Titolo</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Prezzo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row"><a href="{{ route('comics.show', ['comic' => $comic->id]) }}">{{ $comic->title }}</a></th>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->type }}</td>
                        <td>{{ $comic->price }}</td>
                    </tr>
                @endforeach
                
            </tbody>
        </table>

        <a href="{{ route('comics.create') }}" class="btn btn-success">Aggiungi un fumetto</a>
    </div>
@endsection
