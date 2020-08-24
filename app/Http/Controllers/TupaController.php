<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tupa;

class TupaController extends Controller
{
    //
    public function creartupa(){
    	return view ('tupa.tupa');
    }

    public function registrartupa(){

    	 $data= request()->all();

    	Tupa::create([
          'orden_tupa' => $data['orden_tupa'],
          'descripcion_tupa' => $data['descripcion'],
         
        ]);

        return Redirect('/administrado.index')->with('status', 'Su ticket ha sido creado con Exito. ');
    }
}
