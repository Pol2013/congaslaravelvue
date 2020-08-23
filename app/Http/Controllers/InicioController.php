<?php

namespace App\Http\Controllers;

use App\Inicio;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $inicio = Inicio::all();
        return $inicio;
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
        $inicio = new Inicio();
        $inicio->name = $request->name;
        $inicio->description = $request->description;
        $inicio->content = $request->content;

        $inicio->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inicio  $inicio
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
          $inicio = Inicio::findOrFail($request->id);
          return $inicio;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inicio  $inicio
     * @return \Illuminate\Http\Response
     */
    public function edit(Inicio $inicio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inicio  $inicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inicio $inicio)
    {
        //
        $inicio = Inicio::findOrFail($request->id);

        $inicio->name = $request->name;
        $inicio->description = $request->description;
        $inicio->content = $request->content;

        $inicio->save();

        return $inicio;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inicio  $inicio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inicio $inicio)
    {
        //
        $inicio = Inicio::destroy($request->id);
        return $inicio;
    }
}
