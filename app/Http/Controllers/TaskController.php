<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Statu;
use App\Models\Proyect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    
    public function index($id)
    {
        $proyecto = Proyect::findOrFail($id);
        $tasks = Task::where('proyect_id', $id);
        return view('tasks.index', compact('proyecto', 'tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'fecha_inicio' => 'required|date',
        ]);

        $id = Auth::user()->id;

        $task = new Proyect;
        $task->titulo = $request->input('titulo');
        $task->descripcion = $request->input('descripcion');
        $task->fecha_inicio = $request->input('fecha_inicio');
        $task->user_id = $id;
        $task->save();

        return redirect()->route('tasks.create')->with('status', 'Proyecto actualizado exitosamente.');
    }

    public function show($id)
    {
        $task = Task::findOrFail($id);
        return view('tasks.show', compact('proyecto'));
    }

    public function edit($id)
    {
       //$task = Task::findOrFail($id);
        $id = Auth::user()->id;
        $task = Task::where('user_id', $id)->findOrFail($id);
        return view('tasks.edit', compact('proyecto'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'fecha_inicio' => 'required|date',
        ]);

        $task = Task::findOrFail($id);
        $task->titulo = $request->input('titulo');
        $task->descripcion = $request->input('descripcion');
        $task->fecha_inicio = $request->input('fecha_inicio');
        $task->save();

        return redirect()->route('tasks.edit', ['id' => $id])->with('status', 'Proyecto actualizado exitosamente.');
    }

    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();

        return redirect()->route('tasks.index')->with('status', 'Proyecto eliminado exitosamente.');
    }
}
