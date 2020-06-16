<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Analitica;

class GraficosController extends Controller
{
     public function index()
    {
    	$analisis = Analitica::all();

        return view('tools.graficos', compact('analisis'));
    }
}
