<div class="promo-card">

    <div class="promo-card-title">
        <a href="{{ $product->product_link }}">
            {{ $product->name }}
        </a>
    </div>
    <div class="promo-card-image">
        <a href="{{ $product->product_link }}">
            <img src="{{ $product->product_image }}" alt="{{ $product->name }}">
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
