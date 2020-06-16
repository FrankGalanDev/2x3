<?php

namespace App\Http\Controllers;

use App\Estado;
use Illuminate\Http\Request;
use Illuminate\Http\toJSON;

class EstadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //listando todos los estados existentes
        $estados = Estado::paginate(10);
        // dd($estados);
        return view('listados.estados', compact('estados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //creando nuevos estados
        return view('formularios/nuevo_estado');
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
           'nombreEstado'  => 'required',

        ]);   */
           
        $estados = request()->all();
        Estado::create($estados);
        return redirect()->route('estados.index')->with('success', 'El estado fue creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Estado $estado)
    {
        //
        return response($estado);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Estado $estado)
    {
        //
        return view('formularios.editar_estado', compact('estado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estado $estado )
    {
        //
        /*  request()->validate([
           'id'  => 'required',
           'nombre_Estado'  => 'required', 
          
       ]);*/
        $estado->update($request->all());
        //dd($estado);
        
        return redirect()->route('estados.index')->with('success', 'El estado fue actualizado');


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
        Estado::destroy($id);                
        return redirect('estados')->with('success', 'El estado fue borrado');
    }
}
