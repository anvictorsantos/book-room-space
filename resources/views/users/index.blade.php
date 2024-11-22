@extends('home.index')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Gerenciamento de Usuários</h1>
    <a href="{{ route('users.create') }}" class="btn btn-success mb-3">Novo Usuário</a>
    
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Tipo</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->user_type }}</td>
                    <td>
                        <!-- Botão de Exibir -->
                        <a href="{{ route('users.show', $user) }}" class="btn btn-info btn-sm">
                            <i class="fas fa-eye"></i> Ver
                        </a>

                        <!-- Botão de Editar -->
                        <a href="{{ route('users.edit', $user) }}" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i> Editar
                        </a>

                        <!-- Botão de Deletar -->
                        <form action="{{ route('users.destroy', $user) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Tem certeza que deseja excluir este usuário?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="fas fa-trash"></i> Excluir
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @if ($users->isEmpty())
        <div class="alert alert-warning">Nenhum usuário encontrado.</div>
    @endif
</div>
@endsection
