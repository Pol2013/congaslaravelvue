@extends('layouts.app')

@section('movimiento')
<div class="container">
 <div class="row">
 <div class="col-md-10 col-md-offset-1">
 {!! Form::open(['route' => 'movimiento.store', 'method' => 'post', 'novalidate']) !!}
            @csrf
                            
                    <div class="card-header">{{ __('Designar Tramites al area Correspondiente') }}</div>


                      <div class="form-group">
                      {!! Form::label('fecha de registro', 'Fecha de Registro') !!}
                      {!! Form::date('fecha_registro_expediente', null, ['class' => 'form-control' ]) !!}
                  </div>

                    <div class="form-group">
                      {!! Form::label('id_expediente', 'Seleccione Expediente') !!}
                      {!! Form::select('id_expediente', [' ' => 'Seleccione un EXPEDIENTE...'] + $expedientes , ['class' => 'form-controller']) !!}
                  </div>
 
                             
                     <div class="form-group">
                      {!! Form::label('id_oficina', 'Seleccione Oficina Destino') !!}
                      {!! Form::select('id_oficina', [' ' => 'Seleccione una OFICINA...'] + $oficina, ['class' => 'form-controller']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('id_usuario', 'Seleccione Usuario') !!}
                      {!! Form::select('id_usuario', [' ' => 'Seleccione USUARIO a cargo...'] + $usuario, ['class' => 'form-controller']) !!}
                  </div>

                                      
                  <div class="form-group">
                      {!! Form::submit('Enviar', ['class' => 'btn btn-success ' ] ) !!}
                  </div>

               {!! Form::close() !!}
                <a href="{{ route('archivo.index')}}">Adjuntar Archivos</a> 
 </div>
 </div>
</div>
@endsection