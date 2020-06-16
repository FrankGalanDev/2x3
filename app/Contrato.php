<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    //
    protected $table = 'contratos';
    protected $fillable = [
     'id', 'planes_id', 'estados_id', 'sitios_id', 'nombreContrato', 'descripcionContrato', 'duracion', 'fechaContrato', 'fechasPago', 'periodosPago'
  ];
  

//Relaciones
//Un  contrato  posee varias facturas
public function factura()
    {
    return $this->hasMany('App\Factura', 'contratos_id');
    }



//Un  contrato  pertenece a un plan
public function plane()
    {
    return $this->belongsTo('App\Plane', 'planes_id');
    }

//Un  contrato  pertenece a un estado 
public function estado()
    {
    return $this->belongsTo('App\Estado', 'estados_id');
    }


//Un  contrato  pertenece a un sitio 
public function sitio()
    {
    return $this->belongsTo('App\Sitio', 'sitios_id');
    }
}