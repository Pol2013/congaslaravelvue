<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Atencion;

class Estado extends Model
{
    //
    protected $table = 'estado';

    public function atencion(){
        return $this->belongsTo('App\Atencion', 'id_estado');
    }
}
