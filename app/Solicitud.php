<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    protected $table = "solicitud";
    protected $guarded = [];

    public function empresa(){
        return $this->belongsTo('App\Empresa','id_empresa','id');
    }

    public function persona(){
        return $this->belongsTo('App\Persona','id_persona','id');
    }

    public function users(){
        return $this->belongsTo('App\User','id_usuario','id');
    }

}
