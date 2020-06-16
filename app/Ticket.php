<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    //
    protected $table = 'tickets';
    protected $fillable = [
    	'id', 'sitios_id', 'estados_id', 'users_id',  'asunto', 'texto', 'asignado_a', 'pin_soporte', 'pin_soporte'

    ];

     //Relaciones

public function comentarios_ticket()
        {
            return $this->hasMany('App\ComentariosTicket', 'tickets_id');
        } 


//un sitio pertenece a un  cliente
public function user()
    {
    return $this->belongsTo('App\User', 'users_id');
    }
    

//un cli pertenece a un estado
public function estado()
    {
    return $this->belongsTo('App\Estado','estados_id');
    }


public function sitio()
    {
    return $this->belongsTo('App\Sitio', 'sitios_id');
    }


}
