<!-- resources/views/locals/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Locais</h2>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('locals.create') }}" class="btn btn-primary mb-3">Criar Local</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($locals as $local)
                <tr>
                    <td>{{ $local->name }}</td>
                    <td>
                        <a href="{{ route('locals.edit', $local->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('locals.destroy', $local->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
