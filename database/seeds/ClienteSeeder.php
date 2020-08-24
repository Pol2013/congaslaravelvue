<?php

use Illuminate\Database\Seeder;
use App\Cliente;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Cliente::create([
          'nombre' => 'SELECCIONE CLIENTE',
          'dni' => 'null',
          'direccion' => 'null',
          'telefono' => 'null',
          'id_tipo_documento' => '0'
        ]);

       

       

    }
}
