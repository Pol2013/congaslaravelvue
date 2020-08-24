<?php

use Illuminate\Database\Seeder;
Use Illuminate\Support\Facades\DB;
use App\Actor;
class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
      

          Actor::create([
          'denominacion' => 'ADMINISTRADOR',
        ]);
        
      Actor::create([
          'denominacion' => 'USUARIO / RECEPCIÓN',
        ]);  
         
         Actor::create([
          'denominacion' => 'USUARIO / ATENCIÓN',
        ]);
         
    }
}
