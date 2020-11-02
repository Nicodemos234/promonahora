@extends('layout.main')

@section('title')
    {{ $product->name }} - Promo na Hora
@endsection

@section('content')
    <h2>Product Name: </h2>
    <p>{{ $product->name }}</p>

    <h3>Product Belongs to</h3>

    <ul>
        @foreach ($product->categories as $category)
            <li>{{ $category->name }}</li>
        @endforeach
    </ul>
@endsection