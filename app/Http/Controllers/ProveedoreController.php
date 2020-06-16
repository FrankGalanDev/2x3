<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proveedore;
use App\Estado;

class ProveedoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $proveedores = Proveedore::with('estado')->paginate(10);
         
        return view('listados.proveedores', compact('proveedores'));
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
       // dd($estados);
        return view('formularios/nuevo_proveedor', compact('estados'));
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
         //
      /*  request()->validate([
           'id'  => 'required',
           'nombre'  => 'required',
           'url'  => 'required',
           'telefono'  => 'required',
           'usuario'  => 'required',
           'contraseña'  => 'required',
           'url_conex'  => 'required',
           'script_conex'  => 'required',
           'usuario_conex'  => 'required',
           'password_conex'  => 'required',
           'estados_id'  => 'required',
            
       ]);
        
         
        $proveedores = request()->all();
        
       if (($request)->hasFile('avatar'))
            {
               /* $proveedores['campo de la tabla']=$request->file(campo del formulario)->store('carpeta',disco relativo);
                $proveedores['avatar']=$request->file('avatar')->store('uploads','public');
            }*/
     
        $proveedores = $request->all();
        Proveedore::create($proveedores);
        return redirect()->route('proveedores.index')->with('success', 'El proveedore fue creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Proveedore $proveedore, Estado $estado)
    {
        //
        $proveedore->load('estado');
        return response($proveedore);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Proveedore $proveedore)
    {
        //
        $estado = Estado::all();
        $proveedore->load('estado'); 
        return view('formularios.editar_proveedor', compact('proveedore','estado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proveedore $proveedore)
    {
        //
        /*     request()->validate([
           'id'  => 'required',
           'nombre'  => 'required',
           'url'  => 'required',
           'telefono'  => 'required',
           'usuario'  => 'required',
           'contraseña'  => 'required',
           'url_conex'  => 'required',
           'script_conex'  => 'required',
           'usuario_conex'  => 'required',
           'password_conex'  => 'required',
           'estados_id'  => 'required',
            
       ]);*/
        
         
        $proveedore->update($request->all());
        //dd($proveedore);
        
        return redirect()->route('proveedores.index')->with('success', 'El proveedor fue actualizado');
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
        Proveedore::destroy($id);   

        return redirect('proveedores')->with('success', 'El proveedor  borrado');

    }
}
