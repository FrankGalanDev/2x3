<?php

namespace App\Http\Controllers;

use App\Factura;
use App\Estado;
use App\Contrato;
use App\Sitio;
use App\User;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $facturas = Factura::with('contrato', 'estado')->paginate(10);
        return view('listados.facturas', compact('facturas'));
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
        $contratos = Contrato::all();
        return view('formularios.nueva_factura', compact('estados','contrato'));
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
        $facturas = request()->all();
        Factura::create($factura);
        return redirect()->route('facturas.index')->with('success', 'la factura fue creada fue creado'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function show(Factura $factura)
    {
        //
        $user = User::all();
        $sitio = Sitio::all();
        $estado = Estado::all();
        $contrato = Contrato::all();
        
        $factura->load( 'estado', 'contrato','sitio','user');
       //dd($pago);
        return view ('tools.ver_factura',compact('factura'));

      //  return response($factura);


    }

     public function convertir_pdf($id)
    {
         

        $pdf = PDF::setpaper('A4', 'portrait');
        $data = Factura::find($id);
     
        $pdf= PDF::loadView('documentos/facturaPDF',compact('data'));
//echo($data);
       //dd($pago);
       // return  $pdf->download('factura_misclientes.pdf')->save(storage_path('app/public/usuarios/avatars/facturas/').'sitio->name'.'factura.pdf');
        return $pdf->download('factura_lista.pdf');


    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function edit(Factura $factura, Sitio $sitio,Estado $estado )
    {
        //
        $estado = Estado::all();
        $sitio = Sitio::all();
        $factura->load('estado','sitio');
        // echo $pago;
        return view('formularios.editar_factura', compact('factura', 'estado', 'sitio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Factura $factura)
    {
        //

        $factura->update($request->all());
        //dd($pago);
        
        return redirect()->route('facturas.index')->with('success', 'la factura  fue actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function destroy(Factura $factura)
    {
        //
    }
}
