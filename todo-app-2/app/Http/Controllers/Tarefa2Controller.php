<?php

namespace App\Http\Controllers;

use App\Models\Tarefa2;
use Illuminate\Http\Request;

class Tarefa2Controller extends Controller
{
    public function index()
    {
        $tarefas = Tarefa2::all();
        return view('tarefas2.index', compact('tarefas'));
    }

    public function create()
    {
        return view('tarefas2.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
        ]);

        Tarefa2::create($request->all());

        return redirect()->route('tarefas2.index');
    }

    public function edit(Tarefa2 $tarefa2)
    {
        return view('tarefas2.edit', compact('tarefa2'));
    }

    public function update(Request $request, Tarefa2 $tarefa2)
    {
        $request->validate([
            'titulo' => 'required',
        ]);

        $tarefa2->update($request->all());

        return redirect()->route('tarefas2.index');
    }

    public function destroy(Tarefa2 $tarefa2)
    {
        $tarefa2->delete();
        return redirect()->route('tarefas2.index');
    }
}
