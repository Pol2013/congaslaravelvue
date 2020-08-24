<?php

use Illuminate\Database\Seeder;
use App\Atencion;
class AtencionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Atencion::create([
          'observacion' => 'Notifiquese Aprobacion',
          'id_usuario' => '2',
          'id_expediente' => '2',
          'id_movimiento' => '3',
          'costo' => '3',
          'tiempo' => '35',
           'id_estado' => '2'
        ]);
         Atencion::create([
          'observacion' => 'Notifiquese Copias de Contrato',
          'id_usuario' => '1',
          'id_expediente' => '3',
          'id_movimiento' => '2',
          'costo' => '2',
          'tiempo' => '30',
          'id_estado' => '1'
        ]);
          Atencion::create([
          'observacion' => 'Aprobado Entregado',
           'id_usuario' => '2',
          'id_expediente' => '2',
          'id_movimiento' => '3',
          'costo' => '1',
          'tiempo' => '35',
          'id_estado' => '3'
        ]);
    }
}
