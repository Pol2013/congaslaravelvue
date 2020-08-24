<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Autorizacion;
use App\Recepcion;
use App\Atencion;
use App\Expediente;

class User extends Authenticatable

{
   
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'id', 'name', 'apellido', 'email', 'password', 'id_autorizacion'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function autorizacion(){
        return $this->hasMany('Autorizacion::class');
    }
    public function recepcion(){
        return $this->belongsTo('App\Recepcion', 'id_usuario');
    }
    public function atencion(){
        return $this->belongsTo('App\Atencion', 'id_usuario');
    }
      public function expediente(){
        return $this->belongsTo('App\Expediente', 'id_usuario');
    }
  
}
