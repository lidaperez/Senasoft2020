<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = "producto";
    protected $guarded = [];

    public function empresa(){
        return $this->belongsTo('App\Empresa','id_empresa','id');
    }

    public function proveedor(){
        return $this->belongsTo('App\Proveedor','id_proveedor','id');
    }
}
