@extends('layouts.app')

@section('eficacia')
<div class="container">
    <div class="row">
       
       <table class="table table-condensed table-striped table-bordered">
            <thead>
                <tr>
                  <th>Fecha de Registro</th>
                  <th>Codigo del Trabajador</th>
                  <th>Resultados Alcanzados</th>
                  <th>Resultados Esperados</th>
                  <th>Nivel de Eficacia</th>
 
                </tr>
            </thead>
            <tbody>
                         
               
               @foreach($eficacias as $eficacia) 
                <tr>
                    <td>{{ $eficacia->fecha_registro }}</td><br />
                    <td>{{ $eficacia->usuario }}</td><br />
                      <td>{{ $eficacia->resultado_atendido }}</td><br />
                      <td>{{ $eficacia->resultado_esperado }}</td><br />
                 

                     <?php 
                      $resultado= $eficacia->resultado_atendido/$eficacia->resultado_esperado;
                     ?>
                    <td>{{ $resultado }}</td>                         
                </tr>
              
                 @endforeach   
                  
               </tbody>
        </table>
 </div>
</div>
@endsection