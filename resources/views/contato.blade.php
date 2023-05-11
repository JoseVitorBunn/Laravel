@extends('layout')

@section('content')
    <h1>Formulário de Contato</h1>

    <form action="{{ route('enviar.contato') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="mensagem">Mensagem:</label>
            <textarea class="form-control" id="mensagem" name="mensagem"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
@endsection