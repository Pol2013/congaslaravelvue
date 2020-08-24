<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departamento;

class DepartamentoController extends Controller
{
    //

  public function creardepar(){

       return view('departamento.departamento');

  }



    public function registrodepar(){
        $data=  request()->all();

        Departamento::create([

          'nombre_departamento' => $data['nom_depar'],
          'responsable_departamento' => $data['res_depar'],
          'siglas' => $data['sig_depar'],
         
        ]);

      return Redirect('/administrado.index')->with('status', 'Se creo con exito. ');    
    }


}
       
        
    