<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Expediente;

class Tupa extends Model
{
    //
    protected $table= 'tupa';

    protected $fillable = [
      'id', 'orden_tupa', 'descripcion_tupa'
    ];
     public function expediente(){
        return $this->belongsTo('App\Expediente', 'id_tupa');
    }
}
