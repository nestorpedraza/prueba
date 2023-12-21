<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Proyect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class ProyectController extends Controller
{
    public function index()
    {
        $proyectos = Proyect::all();
        return view('proyects.index', compact('proyectos'));
    }

    public function create()
    {
        return view('proyects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'fecha_inicio' => 'required|date',
        ]);

        $id = Auth::user()->id;

        $proyecto = new Proyect;
        $proyecto->titulo = $request->input('titulo');
        $proyecto->descripcion = $request->input('descripcion');
        $proyecto->fecha_inicio = $request->input('fecha_inicio');
        $proyecto->user_id = $id;
        $proyecto->save();

        return redirect()->route('proyects.create')->with('status', 'Proyecto actualizado exitosamente.');
    }

    public function show($id)
    {
        $proyecto = Proyect::findOrFail($id);
        return view('proyects.show', compact('proyecto'));
    }

    public function edit($id)
    {
       //$proyecto = Proyect::findOrFail($id);
        $user_id= Auth::user()->id;
        $proyecto = Proyect::where('user_id', $user_id)->findOrFail($id);
        return view('proyects.edit', compact('proyecto'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'fecha_inicio' => 'required|date',
        ]);

        $proyecto = Proyect::findOrFail($id);
        $proyecto->titulo = $request->input('titulo');
        $proyecto->descripcion = $request->input('descripcion');
        $proyecto->fecha_inicio = $request->input('fecha_inicio');
        $proyecto->save();

        return redirect()->route('proyects.edit', ['id' => $id])->with('status', 'Proyecto actualizado exitosamente.');
    }

    public function destroy($id)
    {
        $proyecto = Proyect::findOrFail($id);
        $proyecto->delete();

        return redirect()->route('proyects.index')->with('status', 'Proyecto eliminado exitosamente.');
    }
}
