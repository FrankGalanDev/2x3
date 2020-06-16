<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incidencia extends Model
{
    //
    //
    protected $table = 'incidencias';
    protected $fillable = [
   'id', 'sitios_id','estados_id', 'nombreIncidencia', 'descripcion', 'fecha_incidencia'
    ];

//Relaciones

//Una incidencia  pertenece  a un  user.
public function sitio()
    {
    return $this->belongsTo('App\Sitio', 'sitios_id');
    }

// Una incidencia  pertenece    a un estado.  
public function estado()
    {
    return $this->belongsTo('App\Estado', 'estados_id');
    }
   
}
