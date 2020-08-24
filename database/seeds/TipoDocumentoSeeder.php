<?php
use App\TipoDocumento;
use Illuminate\Database\Seeder;
Use Illuminate\Support\Facades\DB;
class TipoDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
       
        TipoDocumento::create([
          'descripcion' => 'LIBRETA ELECTORAL O DNI',
        ]);
         TipoDocumento::create([
          'descripcion' => 'CARNET DE EXTRANJERIA',
        ]);
          TipoDocumento::create([
          'descripcion' => 'REG.ÚNICO DE CONTRIBUYENTES',
        ]);
           TipoDocumento::create([
          'descripcion' => 'PASAPORTE',
        ]);
            TipoDocumento::create([
          'descripcion' => 'PART. DE NACIMIENTO - IDENTIDAD',
        ]);
             TipoDocumento::create([
          'descripcion' => 'OTROS',
        ]);
              
    }
}
