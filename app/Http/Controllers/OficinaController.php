<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Oficina;

class OficinaController extends Controller
{
    //
   

    public function crearoficina(){
    	return view('oficina.oficina');
    }

    public function registraroficina(){
    	 $data=  request()->all();

        Oficina::create([

          'nombre_oficina' => $data['nueva_oficina'],
          'id_departamento' => $data['id_departamento'],
                
        ]);
       
        	return Redirect('cliente.index')->with('status', 'Se creo con exito. ');   
    }


}
