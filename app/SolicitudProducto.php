<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SolicitudProducto extends Model
{
    protected $table = "solicitud_producto";
    protected $guarded = [];

    public function producto(){
        return $this->belongsTo('App\Producto','id_producto','id');
    }

    public function bodega(){
        return $this->belongsTo('App\Bodega','id_bodega','id');
    }
}
