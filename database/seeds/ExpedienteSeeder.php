<?php

use Illuminate\Database\Seeder;
use App\Expediente;

class ExpedienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Expediente::create([
          'asunto_expediente' => 'SELECCIONE EXPEDIENTE',
          'numero_folio' => '0',
          'observacion' => 'null',  
          'nota' => 'null',
          'id_departamento' => '0',
          'id_cliente' => '0',
          'id_documento' => '0',
          'id_tupa' => '0',
          'id_usuario' => '0'
         
        ]);
        
          
           }
}
