@extends('layout')

@section('content')
    <div class="container mt-4">
        <h1>Resultado do Formulário</h1>

        <h2>Dados do formulário:</h2>
        <ul>
            @foreach ($dados as $key => $value)
                <li><strong>{{ $key }}:</strong> {{ $value }}</li>
            @endforeach
        </ul>
    </div>
@endsection