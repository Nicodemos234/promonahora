@extends('layout.main')

@section('title')
    Inserindo Loja - Promo na Hora
@endsection

@section('content')
    <form method="POST" enctype="multipart/form-data" class="mt-4">
        @csrf
        <div class="form-group">
            <label for="name">Nome da loja:</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>
        <div class="form-group">
            <label for="link">Link da loja:</label>
            <input type="text" class="form-control" name="link" id="link">
        </div>
        <div class="form-group">
            <label for="image">Imagem da loja:</label>
            <input type="file" class="form-control-file" name="image" id="image">
        </div>
        <button class="btn btn-block btn-promo">Enviar</button>
    </form>
@endsection