<?php

namespace App\Http\Controllers;
use App\User;
use App\Estado;
use App\Sitio;
use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::with('estado')->paginate(10);
        //echo $users ;
      
        return view('listados/users', compact('users'));
    }

    public function clientes()
    {
        //
        $users = User::where('roles','usuario')->paginate(10);
        //echo $users ;

         
        return view('listados/clientes', compact('users'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $estados = Estado::all();
    
        return view('formularios/nuevo_usuario');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
    public function show(User $user, Estado $estado, Sitio $sitio)
    {
        //
         
        $estado =Estado::all();
        $sitios = Sitio::all();
 
        $user->load('estado', 'sitio');
       //echo $user;

        return response($user);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sitio  $sitio
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user, Estado $estado)
    {
        $estado = Estado::all();
       
        $user->load('estado','sitio'); 
         
        return view('formularios.editar_usuario', compact('user', 'estado'));
         
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sitio  $sitio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user )
    {
        /*if ($request->file('avatar'))
        {
           Storage::putFile('usuarios/avatars/avatar', request()->file('avatar')); 
        }*/
        $foto = request('foto');
        $nombre = 'foto_usuario_'.request('name').'.jpg';
      //  dd( $foto);
        //aqui me guarda en una carpeta con el nombre foto y dentro el nombre original de la foto
        //Storage::putFile('/usuarios/avatars/'.$nombre,$foto , 'public'); 


        Storage::putFileAs('usuarios/avatars/', new File($foto), $nombre,$foto ); 
        
       //$request()->file('avatar')->Storage::putFile('assets/usuarios/avatars'),'user->id','public'); 
        //$request()->file('avatar')->store('usuarios/avatars');
        $user->update( ['avatar' => $nombre] );
        $user->update($request()->all()); 
        return redirect()->route('users.index')->with('success', 'El user  fue actualizado');


      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sitio  $sitio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sitio $sitio)
    {
        //
        $users = User::findOrFail($id);
        $users->delete();

        return redirect('/delete')->with('success', 'sitio was successfully deleted');
    }
}
