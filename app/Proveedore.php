<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedore extends Model
{
    //
    protected $table = 'proveedores';
    protected $fillable = [
   'id', 'nombreProveedor', 'estados_id', 'url_proveed', 'telefono',  'facebook', 'direccion', 'wasap', 
   'twitter', 'usuario', 'contraseña', 'url_conex', 'script_conex', 'usuario_conex', 'password_conex'
    ];

//Relaciones
// Una publicacion  pertenece    a un estado.  
public function estado()
    {
    return $this->belongsTo('App\Estado', 'estados_id');
    }


}
