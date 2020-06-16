<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    //
    protected $table = 'pagos';
    protected $fillable = [
   'id', 'sitios_id', 'estados_id', 'facturas_id','numeroPago', 'numeroFactura', 'factura'
    ];

//Relaciones

//Una importacion  pertenece  a un  user.
public function sitio()
    {
    return $this->belongsTo('App\Sitio', 'sitios_id');
    }

public function estado()
    {
    return $this->belongsTo('App\Estado', 'estados_id');
    }
}
