<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plane extends Model
{
    // 
    protected $table = 'planes';
    protected $fillable = [
   'id',  'estados_id', 'nombrePlan',	'resumen',	'instalacion','blog', 'hosting', 'dominio', 'espacio_ilimitado','transferenc_ilim', 'cuentas_correo', 'agente', 'SSL', 'atenc_telefónica', 'proveedor', 'otros_proveedores', 'backup', 'estadística', 'protec_spam', 'restaurac_backup', 'SEO_basico', 'precio_mes', 'precio_semtre', 'precio_año',
    ];

//Relaciones

//Una importacion  pertenece  a un  user.
public function sitio()
    {
    return $this->hasMany('App\Sitio', 'planes_id');


    }

public function contrato()
    {
    return $this->hasMany('App\Contrato', 'planes_id');
    }

public function factura()
    {
    return $this->hasMany('App\Factura', 'planes_id');
    }


public function estado()
    {
    return $this->belongsTo('App\Estado', 'estados_id');
    }


 
}

