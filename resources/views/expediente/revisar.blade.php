@extends('layouts.app')

@section('expediente')
<div class="container">
    <div class="row">
         {!! Form::open(['route' => 'expediente/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
          <div class="form-group">
            <label for="exampleInputName2">Asunto del Expediente</label>
            <input type="text" class="form-control" name = "asunto_expediente" >
          </div>
          <button type="submit" class="btn btn-default">Buscar Expediente</button>
                   <a href="{{ route('expediente.create') }}" class="btn btn-primary">Registrar Nuevo Expediente</a>
              {!! Form::close() !!}
        <br>
 <table class="table table-condensed table-striped table-bordered">
            <thead>
                <tr>
                  <th>Asunto de Expediente</th>
                  <th>Numero de Folio</th>
                  <th>Observacion</th>  
                    <th>Nota</th>  
                      <th>Nombre del Departamento</th>  
                      <th>Nombre del Cliente</th>  
                      <th>Tipo de Documento</th>  
                      <th>TUPA</th>  
                      <th>Id Usario quien lo atendio</th>  
                   
 
                </tr>
            </thead>
            <tbody>
                @foreach($datas as $data)
                <tr>
                    <td>{{ $data->asunto_expediente }}</td>
                    <td>{{ $data->numero_folio }}</td>
                     <td>{{ $data->observacion }}</td>
                      <td>{{ $data->nota }}</td>
                       <td>{{ $data->id_departamento }}</td>
                        <td>{{ $data->id_cliente }}</td>
                         <td>{{ $data->id_documento }}</td>
                          <td>{{ $data->id_tupa }}</td>
                           <td>{{ $data->id_usuario }}</td>
                           
                    <td>
                        <a class="btn btn-primary btn-xs" href="{{ route('expediente.edit',['id' => $data->id] )}}" >Actualizar</a> 
                        <a class="btn btn-danger btn-xs" href="{{ route('expediente/destroy',['id' => $data->id] )}}" >Deshacer</a>
                    </td>
 
                </tr>
                @endforeach
            </tbody>
        </table>
 </div>
</div>
@endsection