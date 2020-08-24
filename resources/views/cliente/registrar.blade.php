
@extends('layouts.app')

@section('cliente')
<div class="container">
 <div class="row">
 <div class="col-md-10 col-md-offset-1">

 {!! Form::open(['route' => 'cliente.store', 'method' => 'post', 'novalidate']) !!}
            @csrf
                            
                    <div class="card-header">{{ __('Registrar Cliente Nuevo') }}</div>


                      <div class="form-group">
                      {!! Form::label('nombre', 'Nombre del Cliente') !!}
                      {!! Form::text('nombre', null, ['class' => 'form-control' ]) !!}
                  </div>

                    <div class="form-group">
                      {!! Form::label('dni', 'DNI') !!}
                      {!! Form::text('dni', null, ['class' => 'form-controller']) !!}
                  </div>
 
                             
                     <div class="form-group">
                      {!! Form::label('direccion', 'Domicilio Fiscal') !!}
                      {!! Form::text('direccion', null, ['class' => 'form-controller']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('telefono', 'Numero Telefonico') !!}
                      {!! Form::text('telefono', null, ['class' => 'form-controller']) !!}
                  </div>

                   <div class="form-group">
                      {!! Form::label('tipo_documento', 'Seleccione Tipo de Documento') !!}
                      {!! Form::select('tipo_documento', ['' => 'Seleccione Tipo de Documento...'] + $tipo_documento , ['class' => 'form-controller']) !!}
                  </div>

                           
                 <div class="form-group">
                      {!! Form::submit('Registrar Cliente Nuevo', ['class' => 'btn btn-success ' ] ) !!}
                  </div>

               {!! Form::close() !!}


 </div>
 </div>
</div>
@endsection





