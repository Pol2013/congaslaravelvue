<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //
    public function index(){
/*
    	$users= [
       'Nicolas', 
       'Maria',
       'karen',
       'Dana',
       'Pol',
       'Steve',
       'Milagros',
       'Jesus',
       'Chino',
       'Jhorgan',
    	];
*/
      $users= User::get();

    	$title='Lista de Usuarios';

    	return view('users.index', compact('title', 'users'));
    }
    public function show($id){
    	return view('users.show', compact('id'));
    }
    public function create(){
    	return 'Crear usuario nuevo';
    }

     public function editar(User $user){
      return view ('users.edit', ['user' => $user]); 
    }

      public function update(User $user){

      $data= request()->validate([
          'name' => 'required',
          'email' => 'required|email',
          'password' => 'required', 

        ]);

      $data['password']= bcrypt($data['password']);

      $user->update($data); 

     // return redirect('users.index/$user->id');
      return redirect()->route('users.show', ['user' => $user] ); 
    }

}
