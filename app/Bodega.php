<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bodega extends Model
{
    protected $table = "bodega";
    protected $guarded = [];

    public function empresa(){
        return $this->belongsTo('App\Empresa','id_empresa','id');
    }
}
