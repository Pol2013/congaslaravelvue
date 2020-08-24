@extends('layouts.app')

@section('registro_departamentos')


  		<form id="departamento" method='POST' action="{{ url('/registros_departamento') }}">
        {{ csrf_field() }}
			<table border="0" width="300px" >
				<tr>
					<td colspan="2" style="text-align:center;"><h1>DEPARTAMENTO [ NUEVO ] </h1></td>
				</tr>
				<tr>
					<td colspan="2" style="text-align:center; background: #D7D1D1;">
						<label class="style-text"> DEPARTAMENTO </label></td>
				</tr>
				<tr>
					<td ><div class="form-group row">
                            <label for="id_departamento" class="col-md-2 col-form-label text-md-right">{{ __('DEPARTAMENTO') }}</label>

                           <label>Ingrese Nuevo Departamento</label><br>
                           <input type="text" name="nom_depar" /> 
                        </div></td>
				</tr>
				<tr>
					<td ><div class="form-group row">
                            <label for="siglas" class="col-md-2 col-form-label text-md-right">{{ __('SIGLAS') }}</label>

                           <label>Ingrese LAS INICIALES DEL DEPARTAMENTO NUEVO</label><br>
                           <input type="text" name="sig_depar" /> 
                        </div></td>
				</tr>
				
				<tr><td>
					<div class="form-group row">
                            <label for="responsable" class="col-md-2 col-form-label text-md-right">{{ __('RESPONSABLE') }}</label>

                           <label>Ingrese Nuevo Responsable</label><br>
                           <input type="text" name="res_depar" /> 
                        </div>
                        </td>
				</tr>
				
			</table>
			<button type="submit">Registrar Departamentos y Oficinas</button>
		</form>
	

	 
@endsection