<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Movimiento;

class Recepcion extends Model
{
    //
    protected $table= 'recepcion';

    protected $fillable= [
     'id', 'costo_recepcion', 'id_movimiento', 'id_usuario', 'id_expediente', 'id_estado', 'observacion_recepcion', 'tiempo_recepcion'
    ];
    
    protected $guarded = ['id'];
    
    public function user(){
    	return $this->hasMany(User::class); 
    }
    public function movimiento(){
    	return $this->hasMany(Movimiento::class);
    }

  
}
