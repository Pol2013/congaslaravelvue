@extends('layouts.app')

@section('movimiento')
<div class="container">
 <div class="row">
 <div class="col-md-10 col-md-offset-1">
 {!! Form::open(['route' => 'archivo.store', 'files'=>true, 'method' => 'post', 'novalidate']) !!}
            @csrf
                            
                    <div class="card-header">{{ __('Adjuntar Documento') }}</div>

                      <div class="form-group">
                      {!! Form::label('file', 'Seleccione archivo adjunto') !!}
                      {!! Form::file('file', null, ['class' => 'form-control' ]) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::submit('Adjuntar Documento', ['class' => 'btn btn-success ' ] ) !!}
                  </div>

               {!! Form::close() !!}
 </div>
 </div>
</div>
@endsection