@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">I miei fumetti</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">titolo</th>
                    <th scope="col">serie</th>
                    <th scope="col">tipo</th>
                    <th scope="col">prezzo</th>
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
