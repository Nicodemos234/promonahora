@extends('layout.main')

@section('title')
    {{ $product->name }} - Promo na Hora
@endsection

@section('content')

    <div class="card d-flex align-items-center mt-4">
        <h1>{{ $product->name }}</h1>

        <div>
            <img class="img-fluid" src="{{ $product->pic }}" alt="{{ $product->name }}">
        </div>
        {{ $product->store->name }}
    </div>
@endsection
