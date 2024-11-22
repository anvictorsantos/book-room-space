@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white text-center">
                    <h4>Login</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required autofocus>
                            @error('email')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password">Senha</label>
                            <input type="password" name="password" id="password" class="form-control" required>
                            @error('password')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group form-check">
                            <input type="checkbox" name="remember" id="remember" class="form-check-input">
                            <label for="remember" class="form-check-label">Lembrar-me</label>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary w-100">Entrar</button>
                        </div>
                    </form>

                    <!-- Adicionando o botão de "Registrar-se" caso o usuário não tenha conta -->
                    <div class="text-center mt-3">
                        <p>Não tem uma conta?</p>
                        <a href="{{ route('register') }}" class="btn btn-secondary w-100">Registrar-se</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
