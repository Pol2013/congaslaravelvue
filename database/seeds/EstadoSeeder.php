<?php

use Illuminate\Database\Seeder;
use App\Estado;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
     
        Estado::create([
          'Estado' => 'Inconcluso',
            ]);
        
        Estado::create([
          'Estado' => 'En Proceso',
          ]);
        Estado::create([
          'Estado' => 'Pendiente',
          ]);
        Estado::create([
          'Estado' => 'Terminado',
          ]);
    }
}
