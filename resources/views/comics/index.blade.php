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
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row"><a
                                href="{{ route('comics.show', ['comic' => $comic->id]) }}">{{ $comic->title }}</a></th>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->type }}</td>
                        <td>{{ $comic->price }}</td>
                        <td class="d-flex gap-1"> 
                            <a href="{{ route('comics.create') }}" class="btn btn-success"><i class="fa-solid fa-plus"></i></a>
                            <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}" class="btn btn-warning">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>

                            <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger" onclick="return confirm('are you sure?')" type="submit"><i class="fa-solid fa-xmark"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>


    </div>
@endsection
