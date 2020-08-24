<?php
use App\Documento;
use Illuminate\Database\Seeder;
Use Illuminate\Support\Facades\DB;

class DocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         
        Documento::create([
          'nombre_documento' => 'SOLICITUD',
        ]);
        Documento::create([
          'nombre_documento' => 'CARTA',
        ]);
        Documento::create([
          'nombre_documento' => 'OFICIO',
        ]);
        Documento::create([
          'nombre_documento' => 'INFORME',
        ]);
        Documento::create([
          'nombre_documento' => 'CEDULA DE NOTIFICACIÓN',
        ]);
       Documento::create([
          'nombre_documento' => 'MEMORAMDUM',
        ]);
       Documento::create([
          'nombre_documento' => 'OFICIO MULTIPLE',
        ]);
        Documento::create([
          'nombre_documento' => 'OTROS',
        ]);
       }
}
