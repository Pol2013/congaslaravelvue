@extends('layouts.app')

@section('eficiencia')
<div class="container">
    <div class="row">
       
       <table class="table table-condensed table-striped table-bordered">
            <thead>
                <tr>
                  <th>Fecha de Registro</th>
                  <th>Codigo del Trabajador</th>
                  <th>Resultados Alcanzados</th>
                   <th>Costo Alcanzado</th>
                    <th>Tiempo Alcanzado</th>
                     <th>Resultados Esperados</th>
                  <th>Costo Esperado</th>  
                  <th>Tiempo Esperado</th>
                  <th>Nivel de Eficiencia</th>
 
                </tr>
            </thead>
            <tbody>
                         
               
               @foreach($eficiencias as $eficiencia) 
                <tr>
                    <td>{{ $eficiencia->fecha_registro }}</td><br />
                    <td>{{ $eficiencia->usuario }}</td><br />
                      <td>{{ $eficiencia->resultado_atendido }}</td><br />
                        <td>{{ $eficiencia->costo_atendido }}</td><br />
                          <td>{{ $eficiencia->tiempo_atendido }}</td><br />
                            <td>{{ $eficiencia->resultado_esperado }}</td><br />
                    <td>{{ $eficiencia->costo_esperado }}</td><br />
                     <td>{{ $eficiencia->tiempo_esperado }}</td><br />

                     <?php 
                      $resultado= ($eficiencia->resultado_atendido/$eficiencia->costo_atendido*$eficiencia->tiempo_atendido) / (
                                    $eficiencia->resultado_esperado/$eficiencia->costo_esperado*$eficiencia->tiempo_esperado);
                     ?>
                    <td>{{ $resultado }}</td>                         
                </tr>
              
                 @endforeach   
                  
               </tbody>
        </table>
 </div>
</div>
@endsection