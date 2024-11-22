<!-- resources/views/rooms/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar Sala</h2>

    <form action="{{ route('rooms.update', $room->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Nome da Sala</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $room->name }}" required>
        </div>

        <div class="form-group">
            <label for="capacity">Capacidade</label>
            <input type="number" name="capacity" id="capacity" class="form-control" value="{{ $room->capacity }}" required>
        </div>

        <div class="form-group">
            <label for="id_local">Local</label>
            <select name="id_local" id="id_local" class="form-control" required>
                @foreach ($locals as $local)
                    <option value="{{ $local->id }}" {{ $room->id_local == $local->id ? 'selected' : '' }}>{{ $local->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Atualizar Sala</button>
    </form>
</div>
@endsection
