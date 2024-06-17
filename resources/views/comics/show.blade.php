@extends('layouts.app')

@section('content')
    <div class="container border border-3 rounded-3 border-danger p-3">
        <h1 class="text-center mb-3">{{ $comic->title }}</h1>
        <div class="d-flex gap-4">
            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="w-50">
            <div>
                <h5>Descrizione:</h5> 
                <p>{{ $comic->description }}</p>
                <h5>Prezzo:</h5> 
                <p>{{ $comic->price }}</p>
                <h5>Serie:</h5> 
                <p>{{ $comic->series }}</p>
                <h5>Tipo:</h5> 
                <p>{{ $comic->type }}</p>
                <h5>Data di vendita</h5>
                <p>{{ $comic->sale_date }}</p>
            </div>
        </div>
    </div>
@endsection
