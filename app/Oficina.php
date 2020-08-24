<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Movimiento;
use App\Autorizacion;
use App\Departamento;

class Oficina extends Model
{
    //
    protected $table= 'oficina';

    protected $fillable = [
     'id', 'nombre_oficina', 'id_departamento'
    ];

    public function movimiento(){
    	return $this->belongsTo('App\Movimiento', 'id_oficina');
    }

   

    public function autorizacion(){
    	return $this->belongsTo('App\Autorizacion', 'id_oficina'); 
    }
    public function departamento(){
        return $this->hasMany(Departamento::class); 
    }
}
