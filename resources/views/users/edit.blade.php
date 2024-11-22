@extends('home.index')

@section('content')
<div class="container mt-5">
    <h1>Editar Usuário</h1>
    <form action="{{ route('users.update', $user) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Nome -->
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $user->name) }}" required>
        </div>

        <!-- Email -->
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" required>
        </div>

        <!-- Tipo de Usuário -->
        <div class="form-group">
            <label for="user_type">Tipo de Usuário</label>
            <select id="user_type" name="user_type" class="form-control" required>
                <option value="Admin" {{ $user->user_type == 'Admin' ? 'selected' : '' }}>Admin</option>
                <option value="Moderator" {{ $user->user_type == 'Moderator' ? 'selected' : '' }}>Moderator</option>
                <option value="Formador" {{ $user->user_type == 'Formador' ? 'selected' : '' }}>Formador</option>
            </select>
        </div>

        <!-- Senha -->
        <div class="form-group">
            <label for="password">Nova Senha (opcional)</label>
            <input type="password" id="password" name="password" class="form-control">
        </div>

        <!-- Confirmação de Senha -->
        <div class="form-group">
            <label for="password_confirmation">Confirmar Nova Senha</label>
            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
        </div>

        <!-- Botões -->
        <button type="submit" class="btn btn-success">Salvar Alterações</button>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
