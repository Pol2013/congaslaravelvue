<?php
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Autorizacion;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
           
          User::create([
          'name' => 'Jean Paul',
          'apellido' => 'Cristobal Paredes',
          'email' => 'jcristobalp@municongas.gob',  
          'password' => bcrypt('147852'),
          'id_autorizacion' => '3'
        ]);

        User::create([
          'name' => 'Chero',
          'apellido' => 'Martined',
          'email' => 'chmartined@municongas.gob',                    
          'password' => bcrypt('123456'),
          'id_autorizacion' => '1'
        ]);

         User::create([
          'name' => 'David',                         
          'apellido' => 'Trujillo',
          'email' => 'dtrujillo@municongas.gob', 
          'password' => bcrypt('987654'),
          'id_autorizacion' => '2'
        ]);

        }
}
