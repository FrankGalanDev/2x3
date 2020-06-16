<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Importacione extends Model
{
    //
    protected $table = 'importaciones';
    protected $fillable = [
   'id', 'users_id','estados_id', 'proveedores_id','sitios_id', 'nombre','url_archivo', 'tipo_archivo', 'tamaño',
    ];

//Relaciones

//Una importacion  pertenece  a un  user.
public function user()
    {
    return $this->belongsTo('App\User', 'users_id');
    }

// Una importacion  pertenece    a un estado.  
public function estado()
    {
    return $this->belongsTo('App\Estado', 'estados_id');
    }

// Una importacion  pertenece    proveedor.  
public function proveedore()
    {
    return $this->belongsTo('App\Proveedore', 'proveedores_id');
    } 
//Una importacion  pertenece  a un  user.
public function sitio()
    {
    return $this->belongsTo('App\Sitio', 'sitios_id');
    }   

}

