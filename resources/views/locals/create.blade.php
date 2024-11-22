<!-- resources/views/locals/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Criar Local</h2>
    
    <form action="{{ route('locals.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Nome do Local</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Criar Local</button>
    </form>
</div>
@endsection
