<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movimiento;
use App\Expediente;
use App\Oficina;
use App\User;
Use Illuminate\Support\Facades\DB;

class MovimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
          $movimientos = DB::table('movimiento')
            ->join('expediente', 'movimiento.id_expediente', '=', 'expediente.id')
            ->join('oficina', 'movimiento.id_oficina', '=', 'oficina.id')
            ->join('users', 'movimiento.id_usuario', '=', 'users.id')
            ->select('movimiento.id', 'movimiento.fecha_registro_expediente', 'expediente.asunto_expediente',
             'oficina.nombre_oficina' ,'users.email')
            ->get();

        return \View::make('expediente.asignar',compact('movimientos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         $expedientes = Expediente::pluck('asunto_expediente', 'id')->toArray();
         $oficina = Oficina::pluck('nombre_oficina', 'id')->toArray();
         $usuario = User::pluck('email', 'id')->toArray();         
      
       return \View::make('expediente.movimiento', compact('expedientes', 'oficina', 'usuario'));
        
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
       
      Movimiento::create([
          'fecha_registro_expediente' => $data['fecha_registro_expediente'],
          'id_expediente' => $data['id_expediente'],
          'id_oficina' => $data['id_oficina'],
           'id_usuario' => $data['id_usuario']
         
            ]);

        return redirect('movimiento');
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
        $movimiento= Movimiento::find($id);
         $expedientes = Expediente::pluck('asunto_expediente', 'id')->toArray();
;        return \View::make('expediente.transaccion', compact('movimiento', 'expedientes'));
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
         $movimiento = Movimiento::find($request->id);

                 $movimiento->fecha_registro_expediente = $request->fecha_registro_expediente;
                $movimiento->id_expediente = $request->id_expediente;
                  $movimiento->id_oficina = $request->id_oficina;
                   $movimiento->id_usuario = $request->id_usuario;
                           
                           $movimiento->save();
                return redirect('movimiento');
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
         $movimiento = Movimiento::find($id);
         $movimiento->delete();
        return redirect()->back();
    }
    public function search(Request $request){
         $movimientos = Oficina::where('nombre_oficina','like','%'.$request->nombre_oficina.'%')->get();
         return \View::make('expediente.asignar', compact('movimientos'));
    }
}
