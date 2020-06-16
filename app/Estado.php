<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table = 'estados';
    protected $fillable = [
      'id','nombreEstado' 
  ];
  

//Relaciones




//Un  estado  posee muchos roles
public function role()
    {
    return $this->hasMany('App\Role', 'estados_id');
    }
//Un  estado  posee muchos users 
public function user()
    {
    return $this->hasMany('App\User', 'estados_id');
    }


//Un  estado  posee muchos roles
public function pago()
    {
    return $this->hasMany('App\Pago', 'estados_id');
    }


//Un  estado  posee muchas incidencias  relacion de uno a muchos el id de uno se coloca en ambas partes de la relacion
public function incidencia()
    {
    return $this->hasMany('App\Incidencia, estados_id');
    }

//Un  estado  posee mucha importaciones
public function importacione()
    {
    return $this->hasMany('App\Importacione', 'estados_id');
    }
//Un  estado  posee muchos proveedores
public function proveedore()
    {
    return $this->hasMany('App\Proveedore', 'estados_id');
    }
//Un  estado  posee muchos planes
public function plane()
    {
    return $this->hasMany('App\Plane', 'estados_id');
    }

//Un  estado  posee muchos planes
public function sitios()
    {
    return $this->hasMany('App\Sitio', 'estados_id');
    }


public function tarea()
    {
    return $this->hasMany('App\Tareas', 'estados_id');
    }

public function contrato()
    {
    return $this->hasMany('App\Contrato', 'estados_id');
    }

public function factura()
    {
    return $this->hasMany('App\Factura', 'estados_id');
    }

}
