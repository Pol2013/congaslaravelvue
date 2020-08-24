<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Atencion as Atencion;

use App\Movimiento;
use App\Expediente;
use App\User;
use App\Estado;
Use Illuminate\Support\Facades\DB;

class AtencionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
         
         $atenciones = DB::table('atencion')
            ->join('movimiento', 'atencion.id_movimiento', '=', 'movimiento.id')
            ->join('expediente', 'atencion.id_expediente', '=', 'expediente.id')
            ->join('users', 'atencion.id_usuario', '=', 'users.id')
            ->join('estado', 'atencion.id_estado', '=', 'estado.id')
            ->select('atencion.id', 'atencion.observacion_atencion', 'movimiento.fecha_registro_expediente', 'expediente.asunto_expediente',
                'users.email','estado.estado', 'atencion.costo_atencion', 'atencion.tiempo_atencion')
            ->get();

        return \View::make('expediente.recepcion',compact('atenciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         $usuario = User::pluck('email', 'id')->toArray();
            $expediente = Expediente::pluck('asunto_expediente', 'id')->toArray();
               $movimiento = Movimiento::pluck('fecha_registro_expediente', 'id')->toArray();
                  $estado = Estado::pluck('Estado', 'id')->toArray();

        return \View::make('expediente.atencion', compact('usuario', 'expediente','movimiento', 'estado'));
       
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

    
        Atencion::create([
       
          'observacion_atencion' => $data['observacion'],
          'id_usuario' => $data['id_usuario'],
          'id_expediente' => $data['id_expediente'],
          'id_movimiento' => $data['id_movimiento'],
          'id_estado' => $data['id_estado'],
           'costo_atencion' => $data['id_costo'],
            'tiempo_atencion' => $data['id_tiempo']

           ]);

       return redirect('atencion');
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
        //$atencion= Atencion::all();
        
                $atencion = Atencion::find($id);

                  $usuario = User::pluck('email', 'id')->toArray();
                 $expediente = Expediente::pluck('asunto_expediente', 'id')->toArray();
                  $movimiento = Movimiento::pluck('fecha_registro_expediente', 'id')->toArray();
                  $estado = Estado::pluck('estado', 'id')->toArray();
              
          return \View::make('expediente.mejorar', compact('atencion', 'movimiento', 'expediente', 'usuario', 'estado'));
                
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
           
                $atencion = Atencion::find($request->id);

                $atencion->observacion_atencion = $request->observacion;
                $atencion->id_movimiento = $request->id_movimiento;
                  $atencion->id_expediente = $request->id_expediente;
                   $atencion->id_usuario = $request->id_usuario;
                    $atencion->id_estado = $request->id_estado;
                      $atencion->costo_atencion = $request->id_costo;
                       $atencion->tiempo_atencion = $request->id_tiempo;
                      
            $atencion->save();
                return redirect('atencion');
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
        $atencion = Atencion::find($id);
         $atencion->delete();
        return redirect()->back();
    }
     public function search(Request $request){
         $atenciones = Estado::where('estado','like','%'.$request->estado.'%')->get();
         return \View::make('expediente.recepcion', compact('atenciones'));
    }
}
