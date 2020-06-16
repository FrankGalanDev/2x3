<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sitio extends Model
{
    //
    protected $table = 'sitios';
    protected $fillable = [
  'id', 'estados_id', 'users_id','categorias_id', 'planes_id','nombreSitio', 'url_sitio', 'aplicacion_sitio', 'ip_FTP', 'user_FTP', 'pass_FTP','url_carpeta_FTP', 'port_conex', 'socket_conex', 'nombre_bd', 'usuario_bd', 'pass_bd', 'host_conex', 'hora_deseada','resumen',  'imagen', 'fecha-inicio', 'fecha-final', 'pais', 'mercado', 'DNS', 'SSL'
];

    //RELACIONES HASMANY


    //un sitio tiene muchas exportaciones 
public function exportacione()
    {
    return $this->hasMany('App\Exportacione', 'sitios_id');
    }

    //un sitio tiene muchas incidencias   relacion de uno a muchos el id de uno se coloca en ambas partes de la relacion
public function incidencia()
    {
    return $this->hasMany('App\Incidencia', 'sitios_id');
    }

public function importacione()
    {
    return $this->hasMany('App\Importacione', 'sitios_id');
    }    

public function pago()
    {
    return $this->hasMany('App\Pago', 'sitios_id');
    }   

public function ticket()
    {
    return $this->hasMany('App\Ticket', 'sitios_id');
    }

public function task()
    {
    return $this->hasMany('App\Task', 'sitios_id');
    }

public function contrato()
    {
    return $this->hasMany('App\Contrato', 'sitios_id');
    }

public function factura()
    {
    return $this->hasMany('App\Factura', 'sitios_id');
    }
 

    //RELACIONES BELONGS TO

public function user()
    {
    return $this->belongsTo('App\User', 'users_id');
    }


public function categoria()
    {
    return $this->belongsTo('App\Categoria');
    }


public function plane()
    {
    return $this->belongsTo('App\Plane', 'planes_id');
    } 

//un sitio pertenece a un estado
public function estado()
    {
    return $this->belongsTo('App\Estado', 'estados_id');
    }


}
