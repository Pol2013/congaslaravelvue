<?php

use Illuminate\Database\Seeder;
use App\Recepcion;

class RecepcionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
          Recepcion::create([
             'observacion' => 'Notifiquese en espera',
          'id_movimiento' => '3',
            'id_expediente' => '2',
          'id_usuario' => '1',
           'costo' => '2',
           'tiempo' => '35',
           'id_estado' => '1'
          
        ]);
            Recepcion::create([
            'observacion' => 'Notifiquese en espera',
            'id_movimiento' => '5',
              'id_expediente' => '2',
            'id_usuario' => '2',
             'costo' => '1',
             'tiempo' => '30',
             'id_estado' => '1'
          
        ]);
              Recepcion::create([
                'observacion' => 'Notifiquese en espera',
          'id_movimiento' => '4',
            'id_expediente' => '2',
          'id_usuario' => '3',
          'costo' => '1',
          'tiempo' => '35',
           'id_estado' => '1'
          
        ]);
                Recepcion::create([
          'observacion' => 'Notifiquese en espera',
          'id_movimiento' => '2',
          'id_expediente' => '2',
          'id_usuario' => '1',
           'costo' => '2',
           'tiempo' => '35',
            'id_estado' => '1'
          
        ]);
                  Recepcion::create([
         'observacion' => 'Notifiquese en espera',
          'id_movimiento' => '3',
          'id_expediente' => '2',
          'id_usuario' => '3', 
          'costo' => '3',
          'tiempo' => '30',
         'id_estado' => '1'
          
        ]);
                    Recepcion::create([
           'observacion' => 'Notifiquese en espera',           
          'id_movimiento' => '1',
          'id_expediente' => '2',
          'id_usuario' => '2',
           'costo' => '4',
           'tiempo' => '35',
            'id_estado' => '1'
          
        ]);
                      Recepcion::create([
          'observacion' => 'Notifiquese en espera',    
          'id_movimiento' => '1',
          'id_expediente' => '2',
          'id_usuario' => '3',
           'costo' => '3',
           'tiempo' => '30',
            'id_estado' => '1'
          
        ]);
    }
}
