<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exportacione;
use App\User;
use App\Estado;
use App\Sitio;
use App\Proveedore;

 

class ExportacioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
        $exportaciones = Exportacione::with('user','sitio', 'estado', 'proveedore')->paginate(10);
        //dd( $exportaciones);


        return view('listados.exportaciones', compact('exportaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return response($exportacione);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
        $exportaciones = Exportacione::findOrFail($id);
        $exportaciones->delete();

        return redirect('delete')->with('success', 'El registro fue borrado');
    }


    public function count(Importacione $importacione)
    {
        //
        $exportaciones = Importacione::all($id);
        $contadorexport = count('id');

        return json($contadorExport);
    }
}