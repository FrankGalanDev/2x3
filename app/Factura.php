<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    //
    protected $table = 'facturas';
    protected $fillable = [
    'id', 'contratos_id', 'estados_id', 'sitios_id', 'users_id', 'nombreFactura' , 'numeroFactura' , 'periodo' , 'importe' , 'iva','fechaContrato' , 'datosEmpresa' 
];

//Una factura pertenece a un contrato  contrato  pertenece a un plan
public function contrato()
    {
    return $this->belongsTo('App\Contrato', 'contratos_id');
    }


public function estado()
    {
    return $this->belongsTo('App\Estado', 'estados_id');
    }

public function sitio()
    {
    return $this->belongsTo('App\Sitio', 'sitios_id');
    }

public function user()
    {
    return $this->belongsTo('App\User', 'users_id');
    }

}

