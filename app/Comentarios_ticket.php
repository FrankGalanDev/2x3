<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentarios_ticket extends Model
{
    //
    protected $table = 'comentarios_tickets';
    protected $fillable = [
      'id','tickets_id', 'users_id', 'comentario', 'resumen'  
    ];

      //un sitio tiene muchas exportaciones pertenece a un estado
public function ticket()
    {
    return $this->belongsTo('App\Ticket', 'tickets_id');
    }

public function user()
    {
    return $this->belongsTo('App\User', 'users_id');
    }
}
