<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\TipoDocumento;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $clientes= Cliente::all();

        return \View::make('cliente.index',compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tipo_documento= TipoDocumento::pluck('descripcion', 'id')->toArray();

        return \View::make('cliente.registrar', compact('tipo_documento'));
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

        Cliente::create([
          'nombre' => $data['nombre'],
          'dni' => $data['dni'],
          'direccion' => $data['direccion'],
          'telefono' => $data['telefono'],
          'id_tipo_documento' => $data['tipo_documento']
        ]);

    return redirect('cliente');
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
        $cliente= Cliente::find($id);
         $tipo_documento= TipoDocumento::pluck('descripcion')->toArray();

          return \View::make('cliente.edit', compact('tipo_documento', 'cliente'));
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
        $cliente = Cliente::find($request->id);

                 $cliente->nombre = $request->nombre;
                 $cliente->dni = $request->dni;
                 $cliente->direccion = $request->direccion;
                 $cliente->telefono = $request->telefono;
                 $cliente->id_tipo_documento = $request->tipo_documento;
                              
                    $cliente->save();
                return redirect('cliente');
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
          $cliente = Cliente::find($id);
         $cliente->delete();
        return redirect()->back();
    }

     public function search(Request $request){
         $clientes = Cliente::where('nombre','like','%'.$request->nombre.'%')->get();
         return \View::make('cliente.index', compact('clientes'));
    }
}
