<!-- resources/views/locals/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar Local</h2>
    
    <form action="{{ route('locals.update', $local->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Nome do Local</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $local->name }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Atualizar Local</button>
    </form>
</div>
@endsection
