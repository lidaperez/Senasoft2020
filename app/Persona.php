<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = "persona";
    protected $guarded = [];

    public function empresa(){
        return $this->belongsTo('App\Empresa','id_empresa','id');
    }
}
