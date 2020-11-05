@extends('layout.main')

@section('title')
    {{ $product->name }} - Promo na Hora
@endsection

@section('content')

    <div class="card mt-4 promo-pd-page p-2">
        <div class="row align-items-center">
            <div class="col col-3">
                <a href="{{ $product->link }}" target="_blank">
                    <img class="img-fluid" src="{{ $product->pic }}" alt="{{ $product->name }}">
                </a>
            </div>
            <div class="col">
                <h1 class="mb-2">{{ $product->name }}</h1>
                <div class="promo-pd-price mb-2">
                    <div class="promo-price-of">
                        {{ $product->priceof }}
                    </div>
                    <div class="promo-price-per">
                        {{ $product->priceper }}
                    </div>
                </div>
                <a target="_blank" href="{{ $product->link }}" class="btn btn-promo mb-2">
                    <span class="material-icons-round icon-align">
                        shopping_basket
                    </span>
                    PEGAR PROMO
                </a>
            </div>
        </div>
    </div>
    <div class="card mt-2 p-2">
        <p>
            {{ $product->description }} <br>
            Loja: {{ $product->store->name }} <br>
            Categorias: @foreach ($product->categories as $category)
                {{ $category->name }};
            @endforeach
        </p>
    </div>
@endsection
