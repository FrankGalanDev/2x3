<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Estado;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categorias = Categoria::with('estado')->paginate(10);
        return view('listados.categorias', compact('categorias'));
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
        return view('formularios.nueva_categoria' ,compact('estados'));
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

        $categorias = request()->all();
        Categoria::create($categorias);

        return redirect()->route('categorias.index')->with('success', 'La categoria fue creado'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Categoria $categoria, Estado $estado)
    {
        //
        $estado = Estado::all();
        $categoria->load('estado');
       //dd($categoria);
        return response($categoria);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Categoria $categoria, Estado $estado)
    {
        //

        $estado = Estado::all();
        $categoria->load('estado'); 
         
        return view('formularios.editar_categoria', compact('categoria','estado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoria $categoria)
    {
        //
      /* request()->validate([
           'id'  => 'required',
           'nombreRol'  => 'required',
          
       ]);*/
        $categoria->update($request->all()); 
        return redirect()->route('categorias.index')->with('success', 'El categoria fue actualizada');
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
        
        Categoria::destroy($id);

        return redirect('categorias')->with('success', ' Un categoria fue borrado');
    }
}