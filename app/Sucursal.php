<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    protected $table = "sucursal";
    protected $guarded = [];

    public function empresa(){
        return $this->belongsTo('App\Empresa','id_empresa','id');
    }
}
