@extends('layouts.app')

@section('movimiento')
<div class="container">
    <div class="row">
         {!! Form::open(['route' => 'movimiento/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
          <div class="form-group">
            <label for="exampleInputName2">Ingrese la oficina  buscar</label>
            <input type="text" class="form-control" name = "nombre_oficina" >
          </div>
          <button type="submit" class="btn btn-default">Buscar Oficina</button>
                   <a href="{{ route('movimiento.create') }}" class="btn btn-primary">Registrar Nuevo Movimiento</a>
              {!! Form::close() !!}
        <br>
 <table class="table table-condensed table-striped table-bordered">
            <thead>
                <tr>
                  <th>Fecha de Registro</th>
                  <th>Asunto del Expediente</th>
                   <th>Nombre del Usuario Asignado</th>  
                   <th>Oficina Destino</th>  
                     
                      
 
                </tr>
            </thead>
            <tbody>
                @foreach($movimientos as $movimiento)
                <tr>
                    <td>{{ $movimiento->fecha_registro_expediente }}</td>
                    <td>{{ $movimiento->asunto_expediente }}</td>
                         <td>{{ $movimiento->email }}</td>
                        <td>{{ $movimiento->nombre_oficina }}</td>
                    
                            <td>
                        <a class="btn btn-primary btn-xs" href="{{ route('movimiento.edit',['id' => $movimiento->id] )}}" >Actualizar</a> 
                        <a class="btn btn-danger btn-xs" href="{{ route('movimiento/destroy',['id' => $movimiento->id] )}}" >Deshacer</a>
                    </td>
 
                </tr>
                @endforeach
            </tbody>
        </table>
 </div>
</div>
@endsection