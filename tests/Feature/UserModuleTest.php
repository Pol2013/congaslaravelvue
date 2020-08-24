<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModuleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    /**
    *
    *
    * @test
    */
    public function it_load_the_user_list_page(){

    	$this->get('usuarios')
    	->assertStatus(200)
    	->assertSee('Usuarios');
    }

/**
    *
    *
    * @test
    */
    public function it_load_the_user_details_page(){

    	
;
    	$this->get('usuarios/5')
    	->assertStatus(200)
    	->assertSee('Mostrando detalle del usuario 5');
    }

     /**
    *
    *
    * @test
    */
    public function it_load_the_user_new_page(){

    	 $this->get('usuarios/nuevo')
    	->assertStatus(200)
    	->assertSee('Crear usuario nuevo');
    }

 /**
    *
    *
    * @test
    */
    public function it_load_the_user_edit_page(){
      $this->withoutExceptionHandling();
    	$user= User::class;

    	$this->get("/usuarios/{$user->id}/editar")
    	->assertStatus(200)
    	->assertViewIs('users.edit')
    	->assertSee('Editar Administrados')
    	->asserViewHas('user',  $user);
    	
    }

    /**
    *
    *
    * @test
    */
    public function it_load_the_user_update_page(){
      
    	$user= User::class;

    	$this->put("/usuarios/{$user->id}", [
          'name'=> 'Jean Paul',
          'email' => 'jcristobalp@municongas.gob',
          'passowrd' => '123456'

    		])->assertRedirect('/usuarios/{$user->id}');
/*
    	->assertStatus(200)
    	->assertViewIs('users.edit')
    	->assertSee('Editar Administrados')
    	->asserViewHas('user',  $user);
    	*/

    	$this->assertCredentials([
           'name'=> 'Jean Paul',
          'email' => 'jcristobalp@municongas.gob',
          'passowrd' => '123456'


    		]);
    }

    /**
    *
    *
    * @test
    */
    public function it_load_the_administrado_update_page(){
      
        $administrado= Administrado::class;

        $this->put("/administrado/{$administrado->id_administrado}", [
          'nombre'=> 'Jean Paul',
          'apelliddo' => 'jcristobalp@municongas.gob',
          'numero_administrado' => '123456'

            ])->assertRedirect('/usuarios/{$user->id}');
/*
        ->assertStatus(200)
        ->assertViewIs('users.edit')
        ->assertSee('Editar Administrados')
        ->asserViewHas('user',  $user);
        */

        $this->assertCredentials([
           'name'=> 'Jean Paul',
          'email' => 'jcristobalp@municongas.gob',
          'passowrd' => '123456'


            ]);
    }
}
