<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Autorizacion;
class Actor extends Model
{
    //
    protected $table= 'actor';

    public function autorizaciones(){
    	return $this->belongsTo('App\Autorizacion', 'id_actor');
    }
}
