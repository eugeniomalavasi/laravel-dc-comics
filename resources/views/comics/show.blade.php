@extends('layouts.app')

@section('content')
    <h1>sono lo show</h1>
        <img src="{{$comic->thumb}}" alt="{{$comic->title}}">

@endsection