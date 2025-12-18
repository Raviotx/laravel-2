@extends('layout')

@section('content')
<h1>Lista de Tarefas 2</h1>
<a href="{{ route('tarefas2.create') }}">Nova Tarefa</a>

<ul>
@foreach($tarefas as $tarefa)
    <li>
        {{ $tarefa->titulo }} 
        <a href="{{ route('tarefas2.edit', $tarefa->id) }}">Editar</a>
        <form action="{{ route('tarefas2.destroy', $tarefa->id) }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit">Deletar</button>
        </form>
    </li>
@endforeach
</ul>
@endsection
