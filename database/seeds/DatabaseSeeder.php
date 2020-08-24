<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	
          $this->truncatetable([
           'documento',
           'departamento',
           'actor',
           'tipo_documento',
           'oficina',
           'autorizacion',
          'users',
      //    'cliente',
        //    'atencion',
           'estado',
           'tupa',
      //     'expediente',
          // 'movimiento'
          //  'recepcion'
         
          ]);
           
     
       // $this->call(UsersTableSeeder::class);
        $this->call('DocumentoSeeder'); 
        $this->call('DepartamentoSeeder');
        $this->call('ActorSeeder');
     $this->call('TipoDocumentoSeeder');
       $this->call('OficinaSeeder');
        $this->call('AutorizacionSeeder');
        $this->call('UserSeeder');
      //   $this->call('ClienteSeeder');
         $this->call('EstadoSeeder');
         $this->call('TupaSeeder');
      // $this->call('ExpedienteSeeder');
       //  $this->call('MovimientoSeeder');
       //    $this->call('AtencionSeeder');
        //    $this->call('RecepcionSeeder');
       
    }

    protected function truncatetable(array $tables){

        DB::statement('set foreign_key_checks = 0; ');

         foreach ($tables as $table) {
         	DB::table($table)->truncate();
         }

       DB::statement('set foreign_key_checks = 0; '); 

    	}

}
