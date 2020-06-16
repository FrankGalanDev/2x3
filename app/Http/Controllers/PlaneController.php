<?php

namespace App\Http\Controllers;

use App\Plane;
use App\Estado;
use Illuminate\Http\Request;

class PlaneController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $planes = Plane::with('estado')->paginate(10);
        //echo($planes);
        return view('listados.planes', compact('planes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $estados= Estado::all();
        //dd($estados);
        return view('formularios/nuevo_plan' ,compact('estados'));
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
       /*  request()->validate([
          
           'nombreRol'  => 'required',
           'estado_id'=>'required'
           
       ]);*/

        $planes = request()->all();
        Plane::create($planes);
        return redirect()->route('planes.index')->with('success', 'El plan fue creado'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Plane $plane, Estado $estado)
    {
        //
        $estado = Estado::all();
        $plane->load('estado');
       //dd($plane);
        return response($plane);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Plane $plane)
    {
        //

        $estado = Estado::all();
        $plane->load('estado'); 
         
        return view('formularios.editar_plan', compact('plane','estado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plane $plane)
    {
        //
      /* request()->validate([
           'id'  => 'required',
           'nombreRol'  => 'required',
          
       ]);*/
        $plane->update($request->all()); 
        return redirect()->route('planes.index')->with('success', 'El plan fue actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        
        Plane::destroy($id);

        return redirect('planes')->with('success', ' Un plan fue borrado');
    }
}
