<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Importacione;
use App\Sitio;


class ImportacioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $importaciones = Importacione::with('estado','proveedore','sitio')->paginate(10);
        return view('listados.importaciones', compact('importaciones'));
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
    public function show(Importacione $importacione)
    {
        //
        return response($importacione);
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
        $exportaciones = Importacione::findOrFail($id);
        $exportaciones->delete();

        return redirect('delete')->with('success', 'El registro fue borrado');
    }


    public function count(Importacione $importacione)
    {
        //
        $importaciones = Importacione::all($id);
        $contadorImport = count('id');

        return json($contadorImport);
    }

}
