<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Expediente;

class Documento extends Model
{
    //
    protected $table= 'documento';

    protected $fillable= [
     'id', 'nombre_documento'
    ];

     public function expediente(){
        return $this->belongsTo('App\Expediente', 'id_documento');
    }
}
