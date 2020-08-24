<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recepcion as Recepcion;
use App\Expediente;
use App\Movimiento;
use App\User;
use App\Estado;
Use Illuminate\Support\Facades\DB;

class RecepcionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$recepciones= Recepcion::all();
         
           $recepciones = DB::table('recepcion')
            ->join('movimiento', 'recepcion.id_movimiento', '=', 'movimiento.id')
            ->join('expediente', 'recepcion.id_expediente', '=', 'expediente.id')
            ->join('users', 'recepcion.id_usuario', '=', 'users.id')
            ->join('estado', 'recepcion.id_estado', '=', 'estado.id')
            ->select('recepcion.id', 'recepcion.observacion_recepcion', 'movimiento.fecha_registro_expediente', 'expediente.asunto_expediente',
                'users.email','estado.estado', 'recepcion.costo_recepcion', 'recepcion.tiempo_recepcion')
            ->get();
        return \View::make('expediente.despacho',compact('recepciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //

        $movimiento= Movimiento::pluck('fecha_registro_expediente', 'id')->toArray();
        $usuario= User::pluck('email', 'id')->toArray();
         $expediente = Expediente::pluck('asunto_expediente', 'id')->toArray();
         $estado = Estado::pluck('Estado', 'id')->toArray();
          return \View::make('expediente.recepcionar', compact('movimiento', 'usuario', 'expediente', 'estado'));
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
              $data= request()->all();

           Recepcion::create([

              'observacion_recepcion' => $data['observacion'],
              'id_movimiento' => $data['id_movimiento'],
             'id_usuario' => $data['id_usuario'],
             'id_expediente' => $data['id_expediente'],
             'id_estado' => $data['id_estado'],
             'costo_recepcion' => $data['id_costo'],
              'tiempo_recepcion' => $data['id_tiempo']
          
          ]);
                                
       return redirect('recepcion');


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
        $recepcion= Recepcion::find($id);

         $movimiento= Movimiento::pluck('fecha_registro_expediente', 'id')->toArray();
        $usuario= User::pluck('email', 'id')->toArray();
           $expediente = Expediente::pluck('asunto_expediente', 'id')->toArray();
           $estado = Estado::pluck('estado', 'id')->toArray();

          return \View::make('expediente.controlar', compact('recepcion', 'movimiento', 'usuario', 'expediente', 'estado'));

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
         $recepcion = Recepcion::find($request->id);

               $recepcion->id_movimiento = $request->id_movimiento;
               $recepcion->id_usuario = $request->id_usuario;
               $recepcion->observacion_recepcion = $request->observacion;
               $recepcion->id_expediente = $request->id_expediente;
               $recepcion->id_estado = $request->id_estado;
                $recepcion->costo_recepcion = $request->id_costo;
                  $recepcion->tiempo_recepcion = $request->id_tiempo;

                    $recepcion->save();

                return redirect('recepcion');
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
         $recepcion = Recepcion::find($id);
         $recepcion->delete();
        return redirect()->back();
    }

      public function search(Request $request){
         $recepciones = Estado::where('estado','like','%'.$request->estado.'%')->get();
         return \View::make('expediente.despacho', compact('recepciones'));
    }
}
