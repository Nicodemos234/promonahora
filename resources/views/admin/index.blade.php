@extends('layout.main')

@section('title')
    Nothing here - Promo na Hora
@endsection

@section('content')
@auth
    <div class="text-right">
        <a href="/logout" class="btn btn-danger mt-4 mr-3">Sair</a>
    </div>
    @include('admin.menu')
@endauth
    @guest
        <div class="mt-5">
            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif
            <form method="post">
                @csrf
                <div class="form-group">
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email" required class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" required min="1" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-promo btn-block mt-3">
                        Login
                    </button>
                </div>
            </form>
        </div>
    @endguest
@endsection
