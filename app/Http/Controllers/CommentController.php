<?php

namespace App\Http\Controllers;
use App\Models\Task;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    
     public function create($id)
     {
         $task = Task::findOrFail($id);
         return view('comments.create', compact('task'));
     }
 
     public function store(Request $request)
     {
 
         $request->validate([
             'comentario' => 'required|string',
             'task_id' => 'required',
         ]);
 
         $id = Auth::user()->id;
         $comment = new Comment;
         $comment->comentario = $request->input('comentario');
         $comment->task_id = $request->input('task_id');
         $comment->user_id = $id;
         $comment->save();
 
         return redirect()->route('tasks.show' , ['id' => $request->input('task_id')])->with('status', 'Commentario creado exitosamente.');
     }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}