<?php

use Illuminate\Database\Seeder;
use App\Movimiento;

class MovimientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Movimiento::create([
           'fecha_registro_expediente' => '2018-01-01',
          'id_expediente' => '0',
          'id_oficina' => '0',  
            'id_usuario' => '0'
        ]);
        
          
    }
}
