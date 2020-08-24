<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expediente as Expediente; 
use App\Cliente;
use App\Tupa;
use App\Documento;
use App\User;
use App\Oficina;
use App\Departamento;
use Illuminate\Support\Facades\DB;

class ExpedienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $datas= Expediente::all();

        return \View::make('expediente.revisar',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
               $departamento= Departamento::pluck('nombre_departamento', 'id')->toArray();   
               $cliente = Cliente::pluck('nombre', 'id')->toArray();
               $documento= Documento::pluck('nombre_documento', 'id')->toArray();
               $tupa= Tupa::pluck('orden_tupa', 'id')->toArray();
               $oficina= Oficina::pluck('nombre_oficina', 'id')->toArray();
               $usuario= User::pluck('email', 'id')->toArray();

      
       return \View::make('expediente.registro', compact('departamento', 'cliente', 'documento', 'tupa', 
        'oficina', 'usuario'));
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

           Expediente::create([
          'asunto_expediente' => $data['asunto_expediente'],
          'numero_folio' => $data['numero_folio'],
          'observacion' => $data['observacion'],
          'nota' => $data['nota'],
            'id_departamento' => $request->id_departamento,
           'id_cliente' => $request->id_cliente,
           'id_documento' => $request->id_documento,
            'id_tupa' => $request->id_tupa,
            'id_usuario' => $request->id_usuario
         
          ]);
                                
       return redirect('expediente');

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
          $clientes= Cliente::pluck('nombre', 'id')->toArray();
          $documentos= Documento::pluck('nombre_documento', 'id')->toArray();
            $tupas=  Tupa::pluck('orden_tupa', 'id')->toArray();
               $usuarios= User::pluck('email', 'id')->toArray();

         $expediente = Expediente::find($id);
                return \View::make('expediente.edit',compact('expediente', 'clientes', 'documentos', 'tupas', 'usuarios'));
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
           $expediente = Expediente::find($request->id);

                 $expediente->asunto_expediente = $request->asunto_expediente;
                $expediente->numero_folio = $request->numero_folio;
                 $expediente->observacion = $request->observacion;
                  $expediente->nota = $request->nota;
                   $expediente->id_departamento = $request->id_departamento;
                    $expediente->id_cliente = $request->id_cliente;
                     $expediente->id_documento = $request->id_documento;
                     $expediente->id_tupa = $request->id_tupa;  
                      $expediente->id_usuario = $request->id_usuario;               
                    
                     $expediente->save();
                return redirect('expediente');
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
         $expediente = Expediente::find($id);
         $expediente->delete();
        return redirect()->back();
    }
    
      public function search(Request $request){
         $datas = Expediente::where('asunto_expediente','like','%'.$request->asunto_expediente.'%')->get();
         return \View::make('expediente.revisar', compact('datas'));
    }
}
