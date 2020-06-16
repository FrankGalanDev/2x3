<?php

namespace App\Http\Controllers;

use App\Ticket;
use App\User;
use App\Estado;
use App\Sitio;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        //
        $tickets = Ticket::with('sitio','estado','user')->paginate(10);

    //   dd($tickets);
         
        return view('listados.tickets', compact('tickets'));
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
        $sitios = Sitio::all();
        $clientes = User::where('administrador','0')->get();
        $empleados = User::where('administrador','1')->get();
        
        
        $variables = User::all('id', 'pin_soporte')->all();

       
        [$keys, $values] = Arr::divide($variables);

        [$ids, $pines] = Arr::divide($values);


     $pines =json_encode($pines);

    
    // echo $pines[2];
       //echo $ids[2];
        return view('formularios/nuevo_ticket', compact('estados', 'clientes', 'sitios', 'empleados', 'pines'));
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
       
        
       $tickets = request()->all();
      //  return response()->json($tickets);
        Ticket::create($tickets);
        return redirect()->route('tickets.index')->with('success', 'El ticket fue creado'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket, Estado $estado, User $user)
    {
    

      $estado = Estado::all();
      $user = User::all();
      $sitio = Sitio::all();
      $ticket->load('estado', 'user','sitio');

     

      return response($ticket);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket, Estado $estado, User $user, Sitio $sitio)
    {
        //
        $estado = Estado::all();
        $sitio = Sitio::all();
        $user = User::all();
        $empleados = User::where('roles_id','3')->get();
        $variables = User::all('id', 'pin_soporte')->all();

       
        [$keys, $values] = Arr::divide($variables);

        [$ids, $pines] = Arr::divide($values);


     $pines =json_encode($pines);

        $ticket->load('estado', 'user','sitio');

        return view('formularios.editar_ticket', compact('ticket','estado', 'empleados', 'pines', 'sitio', 'user' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {
        //
      //dd($request);
        /*$request->validate([
            'id'  => 'required',
            'estados_id'  => 'required',
            'url_ticket'  => 'required',
            'ip_FTP'  => 'required',
            'user_FTP'  => 'required',
            'pass_FTP'  => 'required',
            'nombre_bd'  => 'required',
            'usuario_bd'  => 'required',
            'pass_bd'  => 'required',
            'port_conex'  =>  'required',
            
            'hora_deseada'  =>  'required',
       ]); */
        
         
      /* 
        $ticket->update($request->all());
        //dd($ticket);
        
        return redirect()->route('tickets.index')->with('success', 'El ticket fue actualizado');*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
     /*  Ticket::destroy($id);                
       return redirect('tickets')->with('success', 'ticket was successfully deleted');*/
    }
}
