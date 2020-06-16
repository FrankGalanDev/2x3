<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plane;


class FrontofficeController extends Controller
{
    //
    /**
     * Show the application front-offce.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('front_office.inicio');
    }



    public function paquetes()
    {
        
        $planes = Plane::where('estados_id',1)->get();

        return view('front_office.paquetes', compact('planes'));
    }



    public function servicios()
    {
        
        return view('front_office.servicios');
    }

    


    public function ecommerce()
    {
        return view('front_office.ecommerce');
    }


        public function desarrollo()
    {
        return view('front_office.desarrollo');
    }


          public function alquiler()
    {
        return view('front_office.alquiler');
    }




    public function tecnologia()
    {
        return view('front_office.detalle-tecnologia');
    }


    public function moda()
    {
        return view('front_office.detalle-moda');
    }


    public function mascotas()
    {
        return view('front_office.detalle-mascotas');
    }


    public function negocios()
    {
        return view('front_office.detalle-negocio');
    }


    public function salud()
    {
        return view('front_office.detalle-salud');
    }


    public function sexualidad()
    {
        return view('front_office.detalle-sexualidad');
    }

    public function blog_personal()
    {
        return view('front_office.detalle-blog');
    }

    public function alimentacion()
    {
        return view('front_office.detalle-alimentacion');
    }


    public function creativos()
    {
        return view('front_office.detalle-creativos');
    }


    public function contacto()
    {
        return view('front_office.contacto');
    }


    public function soporte()
    {
        return view('front_office.soporte');
    }
    

    public function faq()
    {
        return view('front_office.faq');
    }


    public function condiciones()
    {
        return view('front_office.condiciones_venta');
    }

     public function cookies()
    {
        return view('front_office.cookies');
    }

      public function legalidad()
    {
        return view('front_office.legalidad');
    }


    public function proteccion()
    {
        return view('front_office.proteccion');
    }

    public function login()
    {
        return view('auth.login');
    }

   


}
