@extends('layouts.app')

@section('tupa')

       <head>
<script type="text/javascript" src="{{ asset('js/libraries/DATATABLES/buttons.colVis.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/libraries/DATATABLES/buttons.flash.min.js') }}"></script>
   <script type="text/javascript" src="{{ asset('js/libraries/DATATABLES/buttons.html5.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/libraries/DATATABLES/buttons.print.min.js') }}"></script> 
    <script type="text/javascript" src="{{ asset('js/libraries/DATATABLES/dataTables.buttons.min.js') }}"></script>
     <script type="text/javascript" src="{{ asset('js/libraries/DATATABLES/dataTables.colVis.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/libraries/DATATABLES/dataTables.select.min.js') }}"></script>
 <script type="text/javascript" src="{{ asset('js/libraries/DATATABLES/jquery.dataTables.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/libraries/DATATABLES/jquery.dataTables.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/libraries/DATATABLES/jquery.dataTables.min1.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/libraries/DATATABLES/jszip.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/libraries/DATATABLES/pdfmake.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/libraries/DATATABLES/sum().js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/libraries/DATATABLES/vfs_fonts.js') }}"></script>
  
  <script type="text/javascript" src="{{ asset('js/libraries/DATATIMEPICKER/jquery.datetimepicker.js') }}" ></script>
   <script type="text/javascript" src="{{ asset('js/libraries/DATATIMEPICKER/jquery.datetimepicker.min.js') }}" ></script>
 <script type="text/javascript" src="{{ asset('js/libraries/DATATIMEPICKER/jquery.datetimepicker.full.min.js') }}" ></script>

  <script type="text/javascript" src="{{ asset('js/libraries/SWEETALERT2/sweetalert2.min.js') }}" ></script>

   <script type="text/javascript" src="{{ asset('js/libraries/TCPDF/tcpdf.php') }}" ></script>
   <script type="text/javascript" src="{{ asset('js/libraries/TCPDF/tcpdf_barcodes_1d.php') }}" ></script>
   <script type="text/javascript" src="{{ asset('js/libraries/TCPDF/tcpdf_barcodes_2d.php') }}" ></script>
   <script type="text/javascript" src="{{ asset('js/libraries/TCPDF/tcpdf_import.php') }}" ></script>
   <script type="text/javascript" src="{{ asset('js/libraries/TCPDF/tcpdf_parser.php') }}" ></script>

  <script type="text/javascript" src="{{ asset('js/libraries/NOTIFLT!/notifIt.js') }}"></script>
  <script type="text/javascript" src="{{ asset('css/css/avgrund.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/controller/controller.administrado.php') }}" ></script> 
  <script type="text/javascript" src="{{ asset('js/script.validate-fields.js') }}" ></script> 
    <script type="text/javascript" src="{{ asset('js/controller/script.personal.js') }}" ></script>

       </head>
		

		<form  method="POST" action="{{ url ('/registrotupa') }}">
      {{ csrf_field() }}
			<table border="0" width="300px">
				<tr>
					<td colspan="2" style="text-align:center;"><h1>T.U.P.A. [ NUEVO ] </h1></td>

				</tr>
				<label>Ingrese un nuevo TUPA</label>
				<tr>
					<td style="text-align:center; background: #D7D1D1;"><label class="style-text"> # ORDEN </label></td>
					<td style="text-align:center; background: #D7D1D1;"><label class="style-text"> DESCRIPCION </label></td>
				</tr>
				<tr>
					<td><input class="re-size" type="text" name="orden_tupa" id="ORDEN_TUPA" onKeyPress="return validarNum(event);" style="width:30px;" autocomplete="off"/></td>
					<td><textarea class="re-size" name="descripcion" id="DESCRIPCION" rows="4" cols="40" style="text-align: justify;" ></textarea></td>
				</tr>
				<button type="submit">Registrar TUPA </button>
			</table>
		</form>
	
 
  <div class="avgrund-cover"></div>
@endsection