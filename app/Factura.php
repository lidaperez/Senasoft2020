<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table = "factura";
    protected $guarded = [];

    public function empresa(){
        return $this->belongsTo('App\Empresa','id_empresa','id');
    }

    public function sucursal(){
        return $this->belongsTo('App\Sucursal','id_sucursal','id');
    }

    public function persona(){
        return $this->belongsTo('App\Persona','id_persona','id');
    }

    public function User(){
        return $this->belongsTo('App\User','id_usuario','id');
    }
}
