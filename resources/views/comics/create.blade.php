@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Inserisci i dati del nuovo fumetto</h1>

        <form action="{{ route('comics.store') }}" method="POST">

            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Titolo fumetto</label>
                <input type="text" class="form-control" name="title" id="title">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label for="img" class="form-label">Url immagine</label>
                <input type="text" class="form-control" name="img" id="img">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Valore fumetto</label>
                <input type="text" class="form-control" name="price" id="price">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Serie fumetto</label>
                <input type="text" class="form-control" name="series" id="series">
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Periodo di vendita</label>
                <input type="text" class="form-control" name="sale_date" id="sale_date">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Tipo fumetto</label>
                <input type="text" class="form-control" name="type" id="type">
            </div>

            <button class="btn btn-success" type="submit">Salva</button>
        </form>
    </div>
@endsection
