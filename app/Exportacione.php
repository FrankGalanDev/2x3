<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exportacione extends Model
{
    //
    protected $table = 'exportaciones';
    protected $fillable = [
   'id', 'users_id', 'estados_id', 'proveedores_id', 'sitios_id', 'nombre_archivo','tipo_archivo', 'url_archivo', 'tamaño', 'hora_deseada',
    ]; 

//Relaciones

//Una exportacion  pertenece  a un  user.
public function user()
    {
    return $this->belongsTo('App\User', 'users_id');
    }

// Una exportacion  pertenece    a un estado.  
public function estado()
    {
    return $this->belongsTo('App\Estado', 'estados_id');
    }

// Una exportacion  pertenece    proveedor.  
public function proveedore()
    {
    return $this->belongsTo('App\Proveedore', 'proveedores_id');
    }   


    // Una exportacion  pertenece a un sitio.  
public function sitio()
    {
    return $this->belongsTo('App\Sitio', 'sitios_id');
    }   

}

