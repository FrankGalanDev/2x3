<?php

namespace App\Http\Controllers;

use App\Task;
use App\User;
use App\Sitio;
use App\Estado;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //listando todas las tareas
        $tasks = Task::with('sitio', 'estado', 'user')->paginate(15);
        
              
        return view('listados.tasks', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $estados = Estado::all();
        $users = User::all();
        $sitios = Sitio::all();
        // dd($estados);
        //echo($clientes);
        return view('formularios/nueva_task', compact('estados', 'users', 'sitios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $tasks = request()->all();
        Task::create($tasks);

        return redirect()->route('tasks.index')->with('success', 'La tarea fue creada');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
         $user  = User::all();
        $sitio  = Sitio::all();
        $estado  = Estado::all(); 
        $task->load('user', 'sitio', 'estado');
        
        return response ($task);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        //
        $estado = Estado::all();
        $sitio = Sitio::all();
        $user = User::all();
       

        $task->load('estado', 'sitio', 'user'); 
         
        return view('formularios.editar_task', compact( 'task', 'estado', 'sitio', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        //
        $task->update($request->all()); 
        return redirect()->route('tasks.index')->with('success', 'El task fue actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        //
        Task::destroy($id);

        return redirect('tasks')->with('success', ' Una task fue borrada');
    }
}
