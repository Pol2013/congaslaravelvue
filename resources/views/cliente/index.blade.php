
@extends('layouts.app')

@section('cliente')	
<head>
 <script type="text/javascript" src="{{ asset('js/script.administrado.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('js/libraries/DATATABLES/buttons.flash.min.js') }}"></script>
   <script type="text/javascript" src="{{ asset('js/libraries/DATATABLES/buttons.html5.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/libraries/DATATABLES/buttons.print.min.js') }}"></script> 
    <script type="text/javascript" src="{{ asset('js/libraries/DATATABLES/dataTables.buttons.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/libraries/DATATIMEPICKER/jquery.datetimepicker.js') }}" ></script>
   <script type="text/javascript" src="{{ asset('js/libraries/DATATIMEPICKER/jquery.datetimepicker.min.js') }}" ></script>
 <script type="text/javascript" src="{{ asset('js/libraries/DATATIMEPICKER/jquery.datetimepicker.full.min.js') }}" ></script>

  <script type="text/javascript" src="{{ asset('js/libraries/SWEETALERT2/sweetalert2.min.js') }}" ></script>
 
   <script type="text/javascript" src="{{ asset('js/libraries/TCPDF/tcpdf.php') }}" ></script>
   <script type="text/javascript" src="{{ asset('js/libraries/TCPDF/tcpdf_barcodes_1d.php') }}" ></script>
   <script type="text/javascript" src="{{ asset('js/libraries/TCPDF/tcpdf_barcodes_2d.php') }}" ></script>
   <script type="text/javascript" src="{{ asset('js/libraries/TCPDF/tcpdf_import.php') }}" ></script>
   <script type="text/javascript" src="{{ asset('js/libraries/TCPDF/tcpdf_parser.php') }}" ></script>
 
     <script type="text/javascript">
    $( document ).ready(function() { 
        _READY_PAGE();
    });
            
  </script>
</head>

 <div id="main" >
    <div id="site_content" style="min-height: 580px;">

	  <div id="sidebar_container" >
		<div class="sidebar">
		  <label id="DATE" class="style-text" ></label>
          <center><h3>CUENTA</h3></center>
		  <table class="tabla_ccs" width="200px">
			<tr>
				<td style="background: #fff;">USUARIO</td>
			</tr>
			<tr>
				<td>{{ auth()->user()->email }}</td>
			</tr>
			<tr>
				<td style="background: #fff;">NOMBRE Y APELLIDO</td>
			</tr>
			<tr>
				<td>{{ auth()->user()->name }}, {{ auth()->user()->apellido }}</td>
			</tr>
			<tr>
				<td>
					<a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
				</td>
			</tr>
			</table>
		  <br><br><br>
        </div>
      </div>	

      <div id="content_form">
      	 <div class="container">

      	 	   {!! Form::open(['route' => 'cliente/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
          <div class="form-group">
            <label for="exampleInputName2">Ingrese nombre del cliente</label>
            <input type="text" class="form-control" name = "nombre" >
          </div>
          <button type="submit" class="btn btn-default">Buscar Clientes</button>
        <a href="{{ route('cliente.create') }}" class="btn btn-primary">Registrar un Nuevo Cliente</a>
        {!! Form::close() !!}
        <BR>
				<h2>Clientes Registrados</h2>
				<table id="TABLE_ADMINISTERED" width="100%" cellspacing="0" >
					<thead>
						<tr>
							<th width="10px">#</th>
							<th width="250px">Nombre del Cliente</th>
							<th width="180px">Documento</th>
							<th width="80px">DNI</th>
							<th>Direccion</th>
							<th width="20px">Acciones</th>
						</tr>
					</thead>
					
					<tbody>
				
				 @foreach($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->id }}</td>
                    <td>{{ $cliente->nombre }}</td>
                    <td>{{ $cliente->id_tipo_documento }}</td>
                    <td>{{ $cliente->dni }}</td>
                    <td>{{ $cliente->direccion }}</td>
                   
                    <td>
                        <a class="btn btn-primary btn-xs" href="{{ route('cliente.edit',['id' => $cliente->id] )}}" >Actualizar</a> 
                        <a class="btn btn-danger btn-xs" href="{{ route('cliente/destroy',['id' => $cliente->id] )}}" >Deshacer</a>
                    </td>
 
                </tr>
                @endforeach
		</tbody>

		</table>
		</div> <!-- FIN DEL CONTAINER -->
        </div> <!-- FIN DEL CONTENT-FORM -->
     
    </div> <!-- FIN DEL SITE_CONTENT -->
  </div> <!-- FIN DEL MAIN -->

  @endsection	
