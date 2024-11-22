@extends('home.index')

@section('content')
<div class="container mt-5">
    <h1>Detalhes do Usuário</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Nome: {{ $user->name }}</h5>
            <p class="card-text"><strong>Email:</strong> {{ $user->email }}</p>
            <p class="card-text"><strong>Tipo:</strong> {{ $user->user_type }}</p>
            <p class="card-text"><strong>Criado em:</strong> {{ $user->created_at->format('d/m/Y H:i') }}</p>
            <p class="card-text"><strong>Última atualização:</strong> {{ $user->updated_at->format('d/m/Y H:i') }}</p>
        </div>
    </div>
    <a href="{{ route('users.index') }}" class="btn btn-primary mt-3">Voltar para a Lista</a>
</div>
@endsection
