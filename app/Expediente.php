<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use App\Departamento;
use App\Cliente;
use App\Documento;
use App\Tupa;
use App\User; 

class Expediente extends Model
{
    //
    protected $table= 'expediente';

    protected $fillable= [
    'id', 'asunto_expediente', 'numero_folio', 'observacion', 'nota', 'id_documento', 'id_departamento', 
    'id_cliente', 'id_tupa', 'id_usuario'
    ];
   
    protected $guarded = ['id'];

    
    
    public function atencion(){
        return $this->belongsTo('App\Atencion', 'id_expediente');
    }
    public function departamento(){
        return $this->hasOne(Departamento::class);
    }
    public function cliente(){
     // return $this->belongsTo('App\Administrado', 'id_administrado');
        return $this->hasOne(Cliente::class);
    }
    public function documento(){
      //   return $this->belongsTo('App\Documento', 'id_documento');
       return $this->hasOne(Documento::class);
    }
    public function tupa(){
  //   return $this->belongsTo('App\Tupa', 'id_tupa');
       return $this->hasOne(Tupa::class);
    }
    public function usuario(){
 //  return $this->belongsTo('App\User', 'id_usercreate');
       return $this->hasOne(User::class);
    }
    
}
