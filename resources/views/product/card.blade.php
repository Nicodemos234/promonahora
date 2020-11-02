<div class="promo-card">

    <div class="promo-card-title">
        <a href="/oferta/{{ $product->id }}" target="_blank">
            {{ $product->name }}
        </a>
    </div>
    <div class="promo-card-image">
    <a href="/oferta/{{ preg_replace('/\W+/', '-', strtolower($product->name))."-".$product->id }}" target="_blank">
            <img src="{{ $product->pic }}" alt="{{ $product->name }}">
        </a>
    </div>
    <div class="promo-card-price">
        <div class="promo-price-of">
            {{ $product->priceof }}
        </div>
        <div class="promo-price-per">
            {{ $product->priceper }}
        </div>
    </div>
    <a href="{{ $product->link }}" target="_blank" class="btn btn-promo btn-block">
        <span class="material-icons-round icon-align">
            shopping_basket
        </span>
        PEGAR PROMO
    </a>
</div>
