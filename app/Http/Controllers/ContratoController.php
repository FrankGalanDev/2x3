<?php

namespace App\Http\Controllers;

use App\Contrato;
use App\Factura;
use App\Plane;
use App\Estado;
use App\Sitio;
use Illuminate\Http\Request;

class ContratoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $contratos= Contrato::with('plane', 'estado', 'sitio')->paginate(10);
        return view('listados.contratos', compact('contratos'));
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
       
       $datosFactura = request()->with('contratos_id','estados_id','nombreFactura' ,'numeroFactura' ,'periodo' ,'importe' ,'fechaContrato' ,'datosEmpresa' );
       $contrato= request()->with('id', 'planes_id', 'estados_id', 'sitios_id', 'nombreContrato', 'descripcionContrato', 'periodo', 'fechaContrato', 'fechasPago', 'periodosPago');

        $factura = (new Factura)->create($datosFactura);

        Contrato::create($contrato);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function show(Contrato $contrato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function edit(Contrato $contrato)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contrato $contrato)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contrato $contrato)
    {
        //
    }
}
