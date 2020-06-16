<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sitio;
use App\Estado;
use App\User;

class SitioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sitios = Sitio::with('estado','user')->paginate(10);
         
        return view('listados.sitios', compact('sitios'));
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
        $clientes = User::where('administrador','1')->get();
       // dd($estados);
       //echo($clientes);
        return view('formularios/nuevo_sitio', compact('estados', 'clientes'));
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
  /*      request()->validate([
            'id'  => 'required',
            'estados_id'  => 'required',
            'url_sitio'  => 'required',
            'ip_FTP'  => 'required',
            'user_FTP'  => 'required',
            'pass_FTP'  => 'required',
            'nombre_bd'  => 'required',
            'usuario_bd'  => 'required',
            'pass_bd'  => 'required',
            'port_conex'  =>  'required',
           
            'hora_deseada'  =>  'required',
       ]);*/
        
        
       $sitios = request()->all();
      //  return response()->json($sitios);
        Sitio::create($sitios);
        return redirect()->route('sitios.index')->with('success', 'El sitio fue creado'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sitio  $sitio
     * @return \Illuminate\Http\Response
     */
    public function show(Sitio $sitio, Estado $estado)
    {
    
      $sitio->load('estado');
      //dd($sitio);

      return response($sitio);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sitio  $sitio
     * @return \Illuminate\Http\Response
     */
    public function edit(Sitio $sitio)
    {
        //
        $estado = Estado::all();
        $sitio->load('estado'); 
        return view('formularios.editar_sitio', compact('sitio','estado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sitio  $sitio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sitio $sitio)
    {
        //
      //dd($request);
        /*$request->validate([
            'id'  => 'required',
            'estados_id'  => 'required',
            'url_sitio'  => 'required',
            'ip_FTP'  => 'required',
            'user_FTP'  => 'required',
            'pass_FTP'  => 'required',
            'nombre_bd'  => 'required',
            'usuario_bd'  => 'required',
            'pass_bd'  => 'required',
            'port_conex'  =>  'required',
            
            'hora_deseada'  =>  'required',
       ]); */
        
         
       
        $sitio->update($request->all());
        //dd($sitio);
        
        return redirect()->route('sitios.index')->with('success', 'El sitio fue actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sitio  $sitio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
       Sitio::destroy($id);                
       return redirect('sitios')->with('success', 'sitio was successfully deleted');
    }
}
