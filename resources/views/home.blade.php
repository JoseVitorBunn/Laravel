@extends('layout')

@section('content')
    <h1>Minha lista de filmes favoritos:</h1>
    <ul>
        @foreach ($filmes as $filme)
            <li>{{ $filme }}</li>
        @endforeach
    </ul>
@endsection