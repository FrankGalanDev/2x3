<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    protected $fillable = [
        'id', 'name', 'email', 'password','administrador','estados_id','empresa', 'apellidos','identificacion_fiscal','telefono','whatsapp','notas' ,'avatar', 'pin_soporte','roles'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


      //Relaciones
      

    //Un user tiene muchas importaciones
    public function exportacione()
        {
            return $this->hasMany('App\Exportacione','users_id');
        }
    
 
    public function sitio()
        {
            return $this->hasMany('App\Sitio','users_id');
        }
    
    public function tickets()
        {
            return $this->hasMany('App\Ticket', 'users_id');
        } 

    public function tarea()
        {
            return $this->hasMany('App\Tareas', 'users_id');
        } 

    
    public function comentarios_ticket()
        {
            return $this->hasMany('App\ComentariosTicket', 'users_id');
        }


    public function factura()
        {
            return $this->hasMany('App\Factura', 'users_id');
        }  




    public function estado()
    {
        
            return $this->belongsTo('App\Estado', 'estados_id');
    }
           
}
