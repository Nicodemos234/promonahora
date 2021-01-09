@extends('layout.main')

@section('title')
    Promo na Hora - As melhores promoções na hora que você precisa
@endsection

@section('content')
    <div class="row mt-4">
        <div class="col col-10">
            <div class="row">
                @foreach ($products as $product)
                    @include('product.card')
                @endforeach
            </div>
            <div class="row">
                {{ $products->links() }}
            </div>
        </div>
        <div class="col">
            Menu Lateral aqui
        </div>
    </div>
@endsection
