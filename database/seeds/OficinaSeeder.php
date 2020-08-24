<?php
use App\Oficina;
use Illuminate\Database\Seeder;
Use Illuminate\Support\Facades\DB;
class OficinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
       Oficina::create([
          'nombre_oficina' => 'RENIEC',
           'id_departamento' => '1',
           
        ]);
        Oficina::create([
          'nombre_oficina' => 'SECRETARIA',
           'id_departamento' => '2',
           
        ]);
         Oficina::create([
          'nombre_oficina' => 'TECNOLOGIA DE INFORMACIÓN Y COMUNICACIONES',
           'id_departamento' => '3',
           
        ]);
         
    }
}
