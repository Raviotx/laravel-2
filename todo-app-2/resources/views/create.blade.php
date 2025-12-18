@extends('layout')

@section('content')
<h1>Criar Tarefa 2</h1>
<form action="{{ route('tarefas2.store') }}" method="POST">
    @csrf
    <input type="text" name="titulo" placeholder="Título" required>
    <button type="submit">Salvar</button>
</form>
@endsection
