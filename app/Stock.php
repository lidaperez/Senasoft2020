<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $table = "stock";
    protected $guarded = [];

    public function empresa(){
        return $this->belongsTo('App\Empresa','id_empresa','id');
    }

    public function producto(){
        return $this->belongsTo('App\Producto','id_producto','id');
    }

    public function bodega(){
        return $this->belongsTo('App\Bodega','id_bodega','id');
    }
}
