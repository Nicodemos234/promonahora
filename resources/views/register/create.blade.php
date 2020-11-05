@extends('layout.main')

@section('title')
    Creating new users - Promo na Hora
@endsection

@section('content')
    <div class="mt-5">
        <form method="post">
            @csrf
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" name="name" id="name" required class="form-control">
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" required class="form-control">
            </div>

            <div class="form-group">
                <label for="password">Senha</label>
                <input type="password" name="password" id="password" required min="1" class="form-control">
            </div>

            <button type="submit" class="btn btn-promo btn-block mt-3">
                Entrar
            </button>
        </form>
    </div>
@endsection
