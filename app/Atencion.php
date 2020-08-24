<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Expediente;
use App\Estado; 
use App\Movimiento;

class Atencion extends Model
{
    //
    protected $table= 'atencion';

    protected $fillable= [
      'id', 'observacion_atencion','id_usuario' , 'id_expediente','id_movimiento' , 'id_estado', 'costo_atencion'
      , 'tiempo_atencion'
    ];

  protected $guarded = ['id'];

  
    public function user(){
        return $this->hasMany(User::class);
    }
    public function estado(){
        return $this->hasMany(Estado::class);
    }
    public function expediente(){
        return $this->hasMany(Expediente::class);
    }
   
  public function movimiento(){
    return $this->hasMany(Movimiento::class);
  }
}
