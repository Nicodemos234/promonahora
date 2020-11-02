@extends('layouts.main')

@section('content')
    <div class="row mt-4">
        <div class="col col-9">
            <div class="row">
                @include('products.card')
            </div>
        </div>
    </div>
@endsection