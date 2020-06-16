<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitas_mensuale extends Model
{
    //

    protected $table = 'visitas_mensuales';
    protected $fillable = [
    	'id','sitios_id', 'analiticas_id','mes','total_paginas','total_paises','total_visitas'

    ];

    
}

