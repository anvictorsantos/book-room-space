<!-- resources/views/locals/show.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detalhes do Local</h2>

    <div class="card">
        <div class="card-header">
            <h4>{{ $local->name }}</h4>
        </div>
        <div class="card-body">
            <ul class="list-group">
                <li class="list-group-item"><strong>Nome:</strong> {{ $local->name }}</li>
                <!-- Adicione outros campos do local se necessário -->
            </ul>
        </div>
        <div class="card-footer text-right">
            <a href="{{ route('locals.index') }}" class="btn btn-secondary">Voltar para a lista</a>
            <a href="{{ route('locals.edit', $local->id) }}" class="btn btn-warning">Editar</a>
        </div>
    </div>
</div>
@endsection
