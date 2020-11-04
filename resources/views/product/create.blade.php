@extends('layout.main')

@section('title')
    Inserindo Produto - Promo na Hora
@endsection

@section('content')
    <form method="POST" class="mt-4">
        @csrf
        <div class="form-group">
            <label for="name">Nome do produto:</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>
        <div class="form-group">
            <label for="link">Link do produto:</label>
            <input type="text" class="form-control" name="link" id="link">
        </div>
        <div class="form-group">
            <label for="image">Imagem do produto:</label>
            <input type="text" class="form-control" name="image" id="image">
        </div>
        <div class="form-group">
            <label for="priceof">Preço de:</label>
            <input type="text" class="form-control" name="priceof" id="priceof">
        </div>
        <div class="form-group">
            <label for="priceper">Preço por:</label>
            <input type="text" class="form-control" name="priceper" id="priceper">
        </div>
        <div class="form-group">
            <label for="description">Descrição:</label>
            <textarea type="text" class="form-control" name="description" id="description"></textarea>
        </div>
        <div class="form-group">
            <label for="store">Loja:</label>
            <select name="store" id="store"  class="custom-select">
                @foreach ($stores as $store)
                    <option value="{{ $store->id }}">{{ $store->name }}</option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-block btn-promo">Enviar</button>
    </form>
@endsection
