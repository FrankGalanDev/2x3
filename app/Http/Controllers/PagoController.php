<?php

namespace App\Http\Controllers;

use App\Pago;
use App\Sitio;
use App\Estado;
use Illuminate\Http\Request;

class PagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        // usando el eager loading relacionamos los modelos, ojo con colocar en la relacion el id del modelo de uno en el de muchos
        $pagos = Pago::with('sitio','estado')->paginate(10);
     
        //echo ($pagos);
         
        return view('listados.pagos', compact('pagos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       
        $sitios = Sitio::all();
        $estados = Estado::all();
        return view('formularios.nuevo_pago', compact('sitios','estados'));

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
           
        $pagos = request()->all();
        Pago::create($pagos);

        return redirect()->route('pagos.index')->with('success', 'La pago fue creada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pago $pago)
    {
        //
        $sitio = Sitio::all();
        $estado = Estado::all();
        
        $pago->load('sitio', 'estado');
       //dd($pago);
        return response($pago);
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pago $pago, Estado $estado, Sitio $sitio)
    {
        //

        $estado = Estado::all();
        $sitio = Sitio::all();
        $pago->load('estado','sitio');
        // echo $pago;
        return view('formularios.editar_pago', compact('pago', 'estado', 'sitio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pago $pago)
    {
        //
       /* request()->validate([
           'id'  => 'required',
           'nombre'  => 'required',
           'descripcion => required',
           'estados_id' => required',
           'sitios_id' => required

        ]);   */

        $pago->update($request->all());
        //dd($pago);
        
        return redirect()->route('pagos.index')->with('success', 'El pago fue actualizado');


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
