<?php


use App\Autorizacion;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class AutorizacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

         Autorizacion::create([
          'email_personal' => 'cherocotrina@hotmail.com',
           'codigo_autorizacion' => 'EM14F34GRT',
            'id_oficina' => '1',
            'id_actor' => '2',
        ]);

       Autorizacion::create([
          'email_personal' => 'dtrujillo@hotmail.com',
           'codigo_autorizacion' => 'LN3631Y9MK',
            'id_oficina' => '2',
            'id_actor' => '3',
        ]);
       
       Autorizacion::create([
          'email_personal' => 'ingenieropaul_22@hotmail.com',
           'codigo_autorizacion' => 'Z9YTIV3FDU',
            'id_oficina' => '3',
            'id_actor' => '1',
        ]);
         
    }
}
