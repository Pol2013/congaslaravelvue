@extends('layouts.app')

@section('atencion')

 <script type="text/javascript" src="{{ asset('js/imprimir.js') }}"></script>


<div class="container">
    <div class="row">
         {!! Form::open(['route' => 'atencion/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
          <div class="form-group">
            <label for="exampleInputName2">Ingrese un estado del documento</label>
            <input type="text" class="form-control" name = "estado" >
          </div>
          <button type="submit" class="btn btn-default">Filtrar documentos alcanzados</button>
        <a href="{{ route('atencion.index') }}" class="btn btn-primary">Mostrar Todos</a>
         <a href="{{ route('atencion.create') }}" class="btn btn-primary">Registrar Atencion</a>
        {!! Form::close() !!}
        <br>
        <h2>Documentos Atendidos</h2>
 <table class="table table-condensed table-striped table-bordered" id="tabla">
            <thead>
                <tr>
                  <th>Observacion</th>
                  <th>Fecha de Registro de Expediente</th>
                   <th>Asunto de Expediente</th>
                    <th>Usuario a cargo</th>
                     <th>Situacion del Expediente</th>
                     <th>Costo utilizado manualmente</th>
                     <th>Tiempo que atendio el Documento</th>
                  <th>Acciones a Tomar</th>  
 
                </tr>
            </thead>
            <tbody>
               
                @foreach($atenciones as $atencion)
                <tr>
                    <td>{{ $atencion->observacion_atencion }}</td>
                    <td>{{ $atencion->fecha_registro_expediente }}</td>
                    <td>{{ $atencion->asunto_expediente }}</td>
                    <td>{{ $atencion->email }}</td>
                    <td>{{ $atencion->estado }}</td>
                      <td>{{ $atencion->costo_atencion }}</td>
                       <td>{{ $atencion->tiempo_atencion }}</td>
                    <td>
                        <a class="btn btn-primary btn-xs" href="{{ route('atencion.edit',['id' => $atencion->id] )}}" >Actualizar</a> 
                        <a class="btn btn-danger btn-xs" href="{{ route('atencion/destroy',['id' => $atencion->id] )}}" >Deshacer</a>
                    </td>
                 
                </tr>
               @endforeach
            </tbody>
        </table>
        <input type="button" value="Imprimir" onclick="imprimir('tabla')">
 </div>
</div>
@endsection