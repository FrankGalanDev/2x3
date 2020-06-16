<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $table = 'tasks';
    protected $fillable = [
   'id', 'sitios_id', 'users_id', 'estados_id','nombreTarea', 'fecha', 'resumen', 'descripcion', 'alarma'
    ];

//Relaciones

//Una tareaa pertenece  a un  sitio.
public function sitio()
    {
    return $this->belongsTo('App\Sitio','sitios_id');
    }


public function estado()
    {
    return $this->belongsTo('App\Estado', 'estados_id');
    }


public function user()
    {
    return $this->belongsTo('App\User', 'users_id');
    }
}
