
@extends('layouts.app')

@section('registro_oficina')


  		<form id="oficina" method='POST' action="{{ url('/registrooficina') }}">
        {{ csrf_field() }}
			<table border="0" width="300px">
				<tr>
					<td colspan="2" style="text-align:center;"><h1>OFICINA [ NUEVO ] </h1></td>
				</tr>
				<tr>
					<td colspan="2" style="text-align:center; background: #D7D1D1;">
						<label class="style-text"> OFICINA</label></td>
				</tr>
				<tr>
					<label>Ingrese Oficina Nueva: </label>
					<input type="text" name="nueva_oficina" /> 
				</tr>
        <tr>
          <div class="form-group row">
          <label for="id_departamento" class="col-md-4 col-form-label text-md-right">{{ __('Departamento') }}</label>
             <div class="col-md-6">
            <!--   <input id="id_profession" type="number" class="form-control{{ $errors->has('id_profession') ? ' is-invalid' : '' }}" name="id_profession" value="{{ old('id_profession') }}" required autofocus>  -->
                  <select name= 'id_departamento' > 
                        <option value=1>SUBDIRECCION DE REGISTRO Y ESTADO CIVIL </option>
                        <option value=2>SUBDIRECCION DE TRAMITE DOCUMENTARIO </option>
                       <option value=3>SUBDIRECCION DE INFORMATICA Y SISTEMAS</option>
                                
                       </select>
                 @if ($errors->has('id_departamento'))
               <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('id_departamento') }}</strong>
                 </span>
                 @endif
           </div>
          </div>
        </tr>
				
				<button type="submit">Registrar Oficinas y Departamentos</button>
			</table>
				</form>
	  
@endsection