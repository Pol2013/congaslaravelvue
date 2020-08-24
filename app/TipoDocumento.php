<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cliente;
class TipoDocumento extends Model
{
    //
    protected $table= 'tipo_documento';

    
    public function cliente(){
        return $this->belongsTo('App\Cliente', 'id_tipo_documento');
    }
}
