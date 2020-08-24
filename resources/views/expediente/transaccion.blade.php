@extends('layouts.app')

@section('movimiento')
<div class="container">
 <div class="row">
 <div class="col-md-10 col-md-offset-1">
 {!! Form::model($movimiento, ['route' => ['movimiento.update', $movimiento->id], 'method' => 'put', 'novalidate']) !!}
            @csrf
                           {!! Form::hidden('id', $movimiento->id) !!}  
                    <div class="card-header">{{ __('Actualizar Movimiento') }}</div>


                      <div class="form-group">
                      {!! Form::label('fecha de registro', 'Fecha de Registro') !!}
                      {!! Form::date('fecha_registro_expediente', null, ['class' => 'form-control' ]) !!}
                  </div>

                    <div class="form-group">
                      {!! Form::label('id_expediente', 'Seleccione Expediente') !!}
                      {!! Form::select('id_expediente', $expedientes, null, ['class' => 'form-controller']) !!}
                  </div>
 
                             
                    
                  <div class="form-group">
                      {!! Form::label('id_oficina', 'Seleccione Oficina Destino') !!}
                      {!! Form:: select('id_oficina', ['1' => 'RENIEC', '2' => 'SECRETARIA', '3' => 'TECNOLOGIA']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('id_usuario', 'Seleccione Usuario') !!}
                      {!! Form:: select('id_usuario', ['1' => 'jcristobalp@municongas.gob', '2' => 'chmartined@@municongas.gob', '3' => 'dtrujillo@municongas.gob']) !!}
                  </div>

                           
                 <div class="form-group">
                      {!! Form::submit('Enviar', ['class' => 'btn btn-success ' ] ) !!}
                  </div>

               {!! Form::close() !!}
 </div>
 </div>
</div>
@endsection