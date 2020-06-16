<?php

namespace App\Http\Controllers;

use App\Incidencia;
use App\Sitio;
use App\Estado;
use Illuminate\Http\Request;

class IncidenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // usando el eager loading relacionamos los modelos, ojo con colocar en la relacion el id del modelo de uno en el de muchos
        $incidencias = Incidencia::with('estado', 'sitio')->paginate(10);
     
      //  echo ($incidencias);
         
        return view('listados.incidencias', compact('incidencias'));
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
        $sitios = Sitio::all();
        return view('formularios.nueva_incidencia', compact('estados', 'sitios'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       /* request()->validate([
           'id'  => 'required',
           'nombre'  => 'required',
           'descripcion => required',
           'estados_id' => required',
           'sitios_id' => required

        ]);   */
           
        $incidencias = request()->all();
        Incidencia::create($incidencias);

        return redirect()->route('incidencias.index')->with('success', 'La incidencia fue creada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Incidencia $incidencia)
    {
        //
        $estado = Estado::all();
        $sitio = Sitio::all();
        $incidencia->load('estado', 'sitio');
        return response($incidencia);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Incidencia $incidencia, Estado $estado, Sitio $sitio)
    {
        //
        $estado = Estado::all();
        $sitio = Sitio::all();
        $incidencia->load('estado','sitio'); 
         
        return view('formularios.editar_incidencia', compact('incidencia', 'estado', 'sitio'));
         
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Incidencia $incidencia)
    {
        //
       /* request()->validate([
           'id'  => 'required',
           'nombre'  => 'required',
           'descripcion => required',
           'estados_id' => required',
           'sitios_id' => required

        ]);   */

           
          $incidencia->update($request->all()); 
        return redirect()->route('incidencias.index')->with('success', 'La incidencia fue actualizada');

    }

    /**
     * Remove the specified resource from storage.
     *
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        
    }
}