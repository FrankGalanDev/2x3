<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Analitica extends Model
{
    //
    protected $table = 'analiticas';
    protected $fillable = [
   'sitios_id','fecha_visita','pais','ip','dispositivo','host','navegador','ciudad','cp','latitud','longitud','time','pagina','type'
   ]
     //una analitica pertenece a un sitioo
	public function sitio()
    {
    return $this->belongsTo('App\Sitio');
    }
}
