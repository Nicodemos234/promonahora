@extends('layouts.main')

@section('content')
    <div class="row mt-4">
        <div class="col col-10">
            <div class="row">
                @include('products.card')
                @include('products.card')
                @include('products.card')
                @include('products.card')
                @include('products.card')
            </div>
        </div>
        <div class="col">
            Menu Lateral aqui
        </div>
    </div>
@endsection