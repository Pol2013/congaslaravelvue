<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Oficina;
use App\Recepcion;
use App\Atencion;
use App\User;
use App\Expediente;

class Movimiento extends Model
{
    //
     protected $table= 'movimiento';

    protected $fillable= [
    'id', 'fecha_registro_expediente', 'tiempo_estimado', 'id_expediente', 'id_oficina',
     'id_usuario'
   
 
    ];
    
 protected $guarded = ['id'];
    
    public function recepcion(){
    	return $this->belongsTo('App\Recepcion', 'id_movimiento');
    }
     public function atencion(){
        return $this->belongsTo('App\Atencion', 'id_movimiento');
    }
     public function expediente(){
        return $this->hasMany('App\Expediente', 'id_expediente');
    }
    public function oficina(){
        return $this->hasMany(Oficina::class);
    }
      
    public function usuario(){
        return $this->hasMany(User::class);
    }
}
