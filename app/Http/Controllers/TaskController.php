<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Statu;
use App\Models\Proyect;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    
    public function index($id)
    {
        $proyecto = Proyect::findOrFail($id);
        $tasks = Task::where('proyect_id', $id)->get();
        return view('tasks.index', compact('proyecto', 'tasks'));
    }

    public function create($id)
    {
        $proyecto = Proyect::findOrFail($id);
        $estados = Statu::all();
        return view('tasks.create', compact('proyecto', 'estados'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'fecha_inicio' => 'required|date',
            'proyect_id' => 'required',
            'statu_id' => 'required',
        ]);

        $id = Auth::user()->id;
        $task = new Task;
        $task->titulo = $request->input('titulo');
        $task->descripcion = $request->input('descripcion');
        $task->fecha_inicio = $request->input('fecha_inicio');
        $task->proyect_id = $request->input('proyect_id');
        $task->statu_id = $request->input('statu_id');
        $task->user_id = $id;
        $task->save();

        return redirect()->route('tasks.index' , ['id' => $request->input('proyect_id')])->with('status', 'Tarea creada exitosamente.');
    }

    public function show($id)
    {
        $task = Task::findOrFail($id);
        return view('tasks.show', compact('task'));
    }

    public function edit($id)
    {
        $user_id = Auth::user()->id;
        $estados = Statu::all();
        $task = Task::where('user_id', $user_id)->findOrFail($id);
        return view('tasks.edit', compact('task', 'estados'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'fecha_inicio' => 'required|date',
            'proyect_id' => 'required',
            'statu_id' => 'required',
        ]);

        $task = Task::findOrFail($id);
        $task->titulo = $request->input('titulo');
        $task->descripcion = $request->input('descripcion');
        $task->fecha_inicio = $request->input('fecha_inicio');
        $task->proyect_id = $request->input('proyect_id');
        $task->statu_id = $request->input('statu_id');
        $task->user_id = Auth::user()->id;
        $task->save();

        return redirect()->route('tasks.edit', ['id' => $id])->with('status', 'Tarea actualizada exitosamente.');
    }

    public function destroy($id)
    {
        $user_id = Auth::user()->id;
        $task = Task::where('user_id', $user_id)->findOrFail($id);
        $idproyecto = $task->proyect->id;
        $task->delete();
        return redirect()->route('tasks.index', ['id' => $idproyecto])->with('status', 'Tarea eliminada exitosamente.');
    }
}
