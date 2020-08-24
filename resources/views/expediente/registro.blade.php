@extends('layouts.app')

@section('expediente')

              
  <div class="container">
 <div class="row">
 <div class="col-md-10 col-md-offset-1">
 {!! Form::open(['route' => 'expediente.store', 'method' => 'post', 'novalidate']) !!}
            @csrf
                            
                    <div class="card-header">{{ __('Designar Tramites de los Clientes') }}</div>


                      <div class="form-group">
                      {!! Form::label('asunto_expediente', 'Asunto de Expediente') !!}
                      {!! Form::text('asunto_expediente', null, ['class' => 'form-control' ]) !!}
                  </div>

                    <div class="form-group">
                      {!! Form::label('numero_folio', 'Numero de Folio') !!}
                      {!! Form::text('numero_folio', null, ['class' => 'form-controller']) !!}
                  </div>
 
                             
                     <div class="form-group">
                      {!! Form::label('observacion', 'Observacion') !!}
                      {!! Form::text('observacion', null, ['class' => 'form-controller']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('nota', 'Nota') !!}
                      {!! Form::text('nota', null, ['class' => 'form-controller']) !!}
                  </div>

                    <div class="form-group">
                      {!! Form::label('id_departamento', 'Seleccione Departamento') !!}
                      {!! Form::select('id_departamento', [' ' => 'Seleccione un DEPARTAMENTO...'] + $departamento, ['class' => 'form-controller']) !!}
                  </div>

                   <div class="form-group">
                      {!! Form::label('id_cliente', 'Seleccione Cliente') !!}
                      {!! Form::select('id_cliente', [' ' => 'Seleccione un CLIENTE...'] + $cliente, ['class' => 'form-controller']) !!}
                  </div>

                   <div class="form-group">
                      {!! Form::label('id_documento', 'Seleccione Documento a Tramitar') !!}
                      {!! Form::select('id_documento', [' ' => 'Seleccione DOCUMENTO a Tramitar...'] + $documento, ['class' => 'form-controller']) !!}
                  </div>

                   <div class="form-group">
                      {!! Form::label('id_tupa', 'Seleccione TUPA') !!}
                      {!! Form::select('id_tupa', [' ' => 'Seleccione TUPA...'] + $tupa, ['class' => 'form-controller']) !!}
                  </div>

                   <div class="form-group">
                      {!! Form::label('id_oficina', 'Seleccione Oficina Destino') !!}
                      {!! Form::select('id_oficina', [' ' => 'Seleccione una OFICINA...'] + $oficina, ['class' => 'form-controller']) !!}
                  </div>

                   <div class="form-group">
                      {!! Form::label('id_usuario', 'Seleccione USUARIO Responsable') !!}
                      {!! Form::select('id_usuario', [' ' => 'Seleccione un USUARIO...'] + $usuario, ['class' => 'form-controller']) !!}
                  </div>

                 <div class="form-group">
                      {!! Form::submit('Registrar Expediente', ['class' => 'btn btn-success ' ] ) !!}
                  </div>

               {!! Form::close() !!}
 </div>
 </div>
</div>
@endsection