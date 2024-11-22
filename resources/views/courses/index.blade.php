<!-- resources/views/courses/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Lista de Cursos</h2>
    <a href="{{ route('courses.create') }}" class="btn btn-primary mb-3">Adicionar Novo Curso</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Quantidade</th>
                <th>Responsável</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($courses as $course)
            <tr>
                <td>{{ $course->name }}</td>
                @if($course->quantity_places)
                    <td>{{ $course->quantity_places }}</td>
                @else
                    <td>0</td>
                @endif
                @if($course->user)
                    <td>User Name: {{ $course->user->name }}</td>
                @else
                    <td>User not assigned</td>
                @endif
                <td>
                    <a href="{{ route('courses.show', $course->id) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir este curso?')">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
