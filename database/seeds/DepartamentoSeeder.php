<?php
use App\Departamento;
use Illuminate\Database\Seeder;
Use Illuminate\Support\Facades\DB;
class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
          
      Departamento::create([
          'nombre_departamento' => 'SUBDIRECCION DE REGISTRO Y ESTADO CIVIL',
           'responsable_departamento' => 'SR. CHERO MARTINED',
           'siglas' => 'SREC',
        ]);
        
        Departamento::create([
          'nombre_departamento' => 'SUBDIRECCION DE TRAMITE DOCUMENTARIO',
          'responsable_departamento' => 'SR. DAVID TRUJILLO',
          'siglas' => 'STD',
        ]);
         
        Departamento::create([
          'nombre_departamento' => 'SUBDIRECCION DE INFORMATICA Y SISTEMAS',
          'responsable_departamento' => 'SR. JEAN PAUL CRISTOBAL PAREDES',
          'siglas' => 'SIS',
        ]);
        
      }
}
