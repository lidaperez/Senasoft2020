<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FacturaProducto extends Model
{
    protected $table = "factura_producto";
    protected $guarded = [];

    public function producto(){
        return $this->belongsTo('App\Producto','id_producto','id');
    }

    public function bodega(){
        return $this->belongsTo('App\Bodega','id_bodega','id');
    }

}
