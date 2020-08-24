@extends('layouts.app')

@section('recepcion')
<div class="container">
    <div class="row">
         {!! Form::open(['route' => 'recepcion/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
          <div class="form-group">
            <label for="exampleInputName2">Ingrese un estado del documento</label>
            <input type="text" class="form-control" name = "estado" >
          </div>
          <button type="submit" class="btn btn-default">Filtrar documentos esperados</button>
        <a href="{{ route('recepcion.index') }}" class="btn btn-primary">Mostrar Todos</a>
         <a href="{{ route('recepcion.create') }}" class="btn btn-primary">Registrar una Recepcion</a>
        {!! Form::close() !!}
        <br>
        <h2>Documentos Esperados</h2>
 <table class="table table-condensed table-striped table-bordered">
            <thead>
                <tr>
                  <th>Observacion</th> 
                  <th>Fecha de Registro de Expediente </th>
                  <th>Asunto de Expediente</th>
                  <th>Usuario a Cargo</th>
                  <th>Situacion del Expediente</th>
                  <th>Costo utilizado manualmente</th>
                  <th>Tiempo que demoro en atender el Documento</th>
                  <th>Acciones</th>  
 
                </tr>
            </thead>
            <tbody>
                @foreach($recepciones as $recepcion)
                <tr>
                    <td>{{ $recepcion->observacion_recepcion }}</td>
                    <td>{{ $recepcion->fecha_registro_expediente }}</td>
                    <td>{{ $recepcion->asunto_expediente }}</td>
                    <td>{{ $recepcion->email }}</td>
                    <td>{{ $recepcion->estado }}</td>
                    <td>{{ $recepcion->costo_recepcion }}</td>
                    <td>{{ $recepcion->tiempo_recepcion }}</td>

                    <td>
                        <a class="btn btn-primary btn-xs" href="{{ route('recepcion.edit',['id' => $recepcion->id] )}}" >Actualizar</a> 
                        <a class="btn btn-danger btn-xs" href="{{ route('recepcion/destroy',['id' => $recepcion->id] )}}" >Deshacer</a>
                    </td>
 
                </tr>
                @endforeach
            </tbody>
        </table>
 </div>
</div>
@endsection