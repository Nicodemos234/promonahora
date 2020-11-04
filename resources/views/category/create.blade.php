@extends('layout.main')

@section('title')
    Inserindo Categoria - Promo na Hora
@endsection

@section('content')
    <form method="POST" class="mt-4">
        @csrf
        <div class="form-group">
            <label for="name">Nome da Categoria:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="icon">Icone da Categoria:</label>
            <input type="text" class="form-control" id="icon" name="icon">
        </div>
        <button class="btn btn-block btn-promo">Enviar</button>
    </form>
@endsection
