@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detalhes do Curso: {{ $course->name }}</h2>

    <div class="card mt-4">
        <div class="card-header">
            <strong>Informações do Curso</strong>
        </div>
        <div class="card-body">
            <ul class="list-group">
                <li class="list-group-item">
                    <strong>Nome:</strong> {{ $course->name }}
                </li>
                <li class="list-group-item">
                    <strong>Quantidade de Vagas:</strong> {{ $course->quantity_places }}
                </li>
                <li class="list-group-item">
                    <strong>Responsável:</strong> 
                    @if($course->user)
                        {{ $course->user->name }}
                    @else
                        Nenhum responsável atribuído
                    @endif
                </li>
            </ul>
        </div>
    </div>

    <div class="mt-4">
        <a href="{{ route('courses.index') }}" class="btn btn-secondary">Voltar para a lista de Cursos</a>
    </div>
</div>
@endsection
