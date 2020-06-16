<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //
    protected $table = 'categorias';
    protected $fillable = [
      'id','nombreCategoria' , 'estados_id'
    ];

      //un sitio tiene muchas exportaciones pertenece a un estado
public function sitio()
    {
    return $this->hasMany('App\Sitio', 'categorias_id');
    }

public function estado()
    {
    return $this->belongsTo('App\Estado', 'estados_id');
    }
}
