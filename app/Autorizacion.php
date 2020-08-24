<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Actor;
use App\Oficina;
use App\User;
class Autorizacion extends Model
{
    //
    protected $table= 'autorizacion';

    public function actor(){
    	return $this->hasMany(Actor::class);
    }
   
   public function oficina(){
   	return $this->hasMany(App\Oficina::class);
   }
   public function user(){
   	return $this->belongsTo('App\User', 'id_autorizacion');
   }
}
