@extends('layouts.app')

@section('recepcion')
<div class="container">
 <div class="row">
 <div class="col-md-10 col-md-offset-1">
 {!! Form::open(['route' => 'recepcion.store', 'method' => 'post', 'novalidate']) !!}
            
                       
                    <div class="card-header">{{ __('Registrar los tiempos de los tramites') }}</div>
                    
                     <div class="form-group">
                      {!! Form::label('observacion', 'Observacion') !!}
                      {!! Form::text('observacion', null, ['class' => 'form-control' ]) !!}
                  </div>
                              
                     <div class="form-group">
                      {!! Form::label('id_movimiento', 'Seleccione Movimiento') !!}
                      {!! Form:: select('id_movimiento', ['' => 'Seleccione Movimiento...'] + $movimiento , null, ['class' => 'form-controller'] ) !!}
                  </div>

                 <div class="form-group">
                   {!! Form::label('id_usuario', 'Seleccione Usuario') !!}
                  
                 {!! Form::select('id_usuario', ['' => 'Seleccione Usuario...'] + $usuario , null, ['class' => 'form-controller']) !!}
                  
                   </div>

                       <div class="form-group">
                      {!! Form::label('id_expediente', 'Seleccione Expediente') !!}
                      {!! Form:: select('id_expediente', ['' => 'Seleccione Expediente...'] + $expediente , null, ['class' => 'form-controller']) !!}
                  </div>

                     <div class="form-group">
                      {!! Form::label('id_estado', 'Seleccione Estado') !!}
                      {!! Form:: select('id_estado', ['' => 'Seleccione Estado...'] + $estado , null, ['class' => 'form-controller']) !!}
                  </div>

                    <div class="form-group">
                      {!! Form::label('id_costo', 'Ingrese el costo que utilizaba manualmente') !!}
                      {!! Form::text('id_costo',  null, ['class' => 'form-control']) !!}
                  </div>

                   <div class="form-group">
                      {!! Form::label('id_tiempo', 'Ingrese el tiempo que demoro en atender el documento') !!}
                      {!! Form::text('id_tiempo',  null, ['class' => 'form-control']) !!}
                  </div>
                                               
                <div class="form-group">
                      {!! Form::submit('Enviar', ['class' => 'btn btn-success ' ] ) !!}
                  </div>

               {!! Form::close() !!}
 </div>
 </div>
</div>
@endsection