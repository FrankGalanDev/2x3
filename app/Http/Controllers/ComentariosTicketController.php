<?php

namespace App\Http\Controllers;

use App\ComentariosTicket;
use App\Ticket;
use App\User;
use Illuminate\Http\Request;

class ComentariosTicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $variaciones = ComentariosTicket::with('ticket')->paginator(10);
     
        //echo ($pagos);
         
        return view('listados.variaciones', compact('variaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tickets = Ticket::all();
        $comentarios = ComentariosTicket::where('tickets_id');
        return view('formularios.variacion', compact('ticket', 'comentarios'));
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
        $variacion = request()->all();
        ComentariosTicket::create($variacion);

        return redirect()->route('tickets.index')->with('success', 'variacion en el ticket creada');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ComentariosTicket  $comentariosTicket
     * @return \Illuminate\Http\Response
     */
    public function show(ComentariosTicket $comentariosTicket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ComentariosTicket  $comentariosTicket
     * @return \Illuminate\Http\Response
     */
    public function edit(ComentariosTicket $comentariosTicket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ComentariosTicket  $comentariosTicket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ComentariosTicket $comentariosTicket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ComentariosTicket  $comentariosTicket
     * @return \Illuminate\Http\Response
     */
    public function destroy(ComentariosTicket $comentariosTicket)
    {
        //
    }
}
