@extends('layout')

@section('content')
<h1>Editar Tarefa 2</h1>
<form action="{{ route('tarefas2.update', $tarefa2->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="titulo" value="{{ $tarefa2->titulo }}" required>
    <button type="submit">Atualizar</button>
</form>
@endsection
