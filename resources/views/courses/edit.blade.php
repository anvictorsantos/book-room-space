<!-- resources/views/courses/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar Curso</h2>

    <form action="{{ route('courses.update', $course->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Nome do Curso</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $course->name }}" required>
        </div>

        <div class="form-group">
            <label for="quantity_places">Quantidade de Vagas</label>
            <input type="number" name="quantity_places" id="quantity_places" class="form-control" value="{{ $course->quantity_places }}" required>
        </div>

        <div class="form-group">
            <label for="id_user">Responsável</label>
            <select name="id_user" id="id_user" class="form-control" required>
                @foreach($users as $user)
                    <option value="{{ $user->id }}" {{ $course->id_user == $user->id ? 'selected' : '' }}>
                        {{ $user->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Salvar Alterações</button>
    </form>
</div>
@endsection
