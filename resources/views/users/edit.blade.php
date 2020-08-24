@extends('layout')

@section('actualizo_users')

<form method="POST" action="">
	 {{  method_field('PUT') }}
    {{ csrf_field() }}
   
<br>
<h2>Editar Usuarios</h2>
<label>Ingrese nombre del Administrado: </label>
<input type="text" name="name" value="{{ old('name' , $user->name)}}" placeholder="nombre administrado"/> 
<br>>
<label>Ingrese numero de Administrado: </label>
<input type="text" name="apellido" value="{{ old('apellido', $user->apellido )}}"/> 
<br>>
<label>Ingrese la direccion del Administrado: </label>
<input type="text" name="password" value="{{ old('password')}}"/> 
<br>

<button type="submit" > Actualizar Administrado </button>
</form>
@endsection




