<!-- resources/views/rooms/show.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detalhes da Sala</h2>

    <div class="card">
        <div class="card-header">
            <h5>{{ $room->name }}</h5>
        </div>

        <div class="card-body">
            <p><strong>Capacidade:</strong> {{ $room->capacity }}</p>
            <p><strong>Local:</strong> {{ $room->local->name }}</p>

            <div class="mt-3">
                <a href="{{ route('rooms.index') }}" class="btn btn-secondary">Voltar</a>
                <a href="{{ route('rooms.edit', $room->id) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('rooms.destroy', $room->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir esta sala?')">Excluir</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
