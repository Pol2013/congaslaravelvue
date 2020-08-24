<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Expediente;
use App\Oficina;

class Departamento extends Model
{
    //
    protected $table= 'departamento';

    protected $fillable = [ 
    'id', 'nombre_departamento', 'responsable_departamento', 'siglas'
    ];
    public function expediente(){
        return $this->belongsTo('App\Expediente', 'id_departamento');
    }
     public function oficina(){
        return $this->belongsTo('App\Oficina', 'id_departamento');
    }
  
}
