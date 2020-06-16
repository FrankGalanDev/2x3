<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sitio;
use App\Exportacione;
use App\Importacione;
use App\Proveedore;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sitios = Sitio::all()->count();

        $exportaciones = Exportacione::all()->count();
       
        $importaciones = Importacione::all()->count();
      
        $proveedores = Proveedore::all()->count();
       
        $users = User::all()->count();

         
      
        return view('usuario', compact('sitios','exportaciones','importaciones','proveedores', 'users' ));     
        return view('usuario');//probando


    }


      public function admin()
    {
        $sitios = Sitio::all()->count();

        $exportaciones = Exportacione::all()->count();
       
        $importaciones = Importacione::all()->count();
      
        $proveedores = Proveedore::all()->count();
       
        $users = User::all()->count();

        $sitios = Sitio::all()->count();
      
        return view('escritorio', compact('sitios','exportaciones','importaciones','proveedores', 'users' ));

    }
}
