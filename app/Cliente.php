<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\TipoDocumento;
use App\Expediente;

class Cliente extends Model
{
    //
    protected $table = 'cliente';

    protected $fillable = ['id', 'nombre', 'dni', 'direccion', 'telefono', 'id_tipo_documento'];

    public function expediente(){
        return $this->belongsTo('App\Expediente', 'id_cliente');
    }
    
    }
