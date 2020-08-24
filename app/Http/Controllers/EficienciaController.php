<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Illuminate\Support\Facades\DB;

class EficienciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
            $eficiencias =  DB::table('movimiento')
                 ->leftJoin('atencion', 'atencion.id_movimiento', '=', 'movimiento.id')
                 ->leftJoin('recepcion', 'recepcion.id_movimiento', '=', 'movimiento.id')
                 ->leftJoin('users', 'movimiento.id_usuario', '=', 'users.id')
                 ->select( 
            'movimiento.fecha_registro_expediente as fecha_registro',
            'movimiento.id_usuario as usuario', 
            DB::raw('count(observacion_atencion) as resultado_atendido'),
            DB::raw('SUM(costo_atencion) as costo_atendido'),
            DB::raw('SUM(tiempo_atencion) as tiempo_atendido'),
            DB::raw('count(observacion_recepcion) as resultado_esperado'),
            DB::raw('SUM(costo_recepcion) as costo_esperado'),
            DB::raw('SUM(tiempo_recepcion) as tiempo_esperado')

              )->groupBy('movimiento.fecha_registro_expediente',
                             'movimiento.id_usuario')
                ->get();

             return \View::make('reporte.eficiencia',compact('eficiencias'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
