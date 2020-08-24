<?php

use Illuminate\Database\Seeder;
use App\Tupa;
class TupaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         
        Tupa::create([
          'orden_tupa' => '11',
          'descripcion_tupa' => 'Sellado de Libros de Actas de Registro',
        ]);
        Tupa::create([
          'orden_tupa' => '12',
          'descripcion_tupa' => 'Comunicacion de Reforma de los Estatutos',
        ]);
        Tupa::create([
          'orden_tupa' => '13',
          'descripcion_tupa' => 'Inscripcion de Registros de Sindicatos',
        ]);
        Tupa::create([
          'orden_tupa' => '14',
          'descripcion_tupa' => 'Registro de Pensionistas a cargo de Trabajadores',
        ]);
        Tupa::create([
          'orden_tupa' => '15',
          'descripcion_tupa' => 'Aprobacion del Reglamento interno del trabajo',
        ]);
        Tupa::create([
          'orden_tupa' => '16',
          'descripcion_tupa' => 'Autorizacion de Planillas de Pagos de libros',
        ]);
        Tupa::create([
          'orden_tupa' => '17',
          'descripcion_tupa' => 'Designacion de delegados de trabajadores',
        ]);
        Tupa::create([
          'orden_tupa' => '18',
          'descripcion_tupa' => 'Rregistro de juntas directivas para sindicatos',
        ]);
    }
}
