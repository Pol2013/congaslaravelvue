@extends('layouts.app')

@section('expediente')
<div class="container">
 <div class="row">
 <div class="col-md-10 col-md-offset-1">
 {!! Form::model($expediente,['route' => ['expediente.update', $expediente->id], 'method' => 'put', 'novalidate']) !!}
            
                  {!! Form::hidden('id', $expediente->id) !!}

            
                    <div class="card-header">{{ __('Actualizar Datos') }}</div>


                      <div class="form-group">
                      {!! Form::label('asunto_expediente', 'Asunto de Expediente') !!}
                      {!! Form::text('asunto_expediente', null, ['class' => 'form-control' ]) !!}
                  </div>
 
                  <div class="form-group">
                      {!! Form::label('numero_folio', 'Numero de Folio') !!}
                      {!! Form::text('numero_folio', null, ['class' => 'form-control' ]) !!}
                  </div>

                   <div class="form-group">
                      {!! Form::label('observacion', 'Observacion') !!}
                      {!! Form::text('observacion', null, ['class' => 'form-control' ]) !!}
                  </div>

                   <div class="form-group">
                      {!! Form::label('nota', 'Nota') !!}
                      {!! Form::text('nota', null, ['class' => 'form-control' ]) !!}
                  </div>
            
                     <div class="form-group">
                      {!! Form::label('id_departamento', 'Seleccione Departamento') !!}
                      {!! Form:: select('id_departamento', ['1' => 'RENIEC', '2' => 'SECRETARIA', '3' => 'SISTEMAS']) !!}
                  </div>

                 <div class="form-group">
                   {!! Form::label('id_cliente', 'Seleccione Cliente') !!}
                  
                 {!! Form::select('id_cliente', $clientes, null, ['class' => 'form-controller']) !!}
                  
                   
                     </div>

                 <div class="form-group">
                      {!! Form::label('documento', 'Seleccione Documento') !!}
                       
                      {!! Form::select('id_documento', $documentos, null, ['class' => 'form-controller']) !!}
                     </div>

                  <div class="form-group">
                      {!! Form::label('tupa', 'Seleccione Tupa') !!}
                       
                     {!! Form::select('id_tupa', $tupas, null, ['class' => 'form-controller']) !!}
                      </div>

                      

                   <div class="form-group">
                      {!! Form::label('id_usuario', 'Usuario Actualizado') !!}
                       
                 {!! Form::select('id_usuario', $usuarios, null, ['class' => 'form-controller']) !!}
                   
                  </div>


                 <div class="form-group">
                      {!! Form::submit('Enviar', ['class' => 'btn btn-success ' ] ) !!}
                  </div>

               {!! Form::close() !!}
 </div>
 </div>
</div>
@endsection