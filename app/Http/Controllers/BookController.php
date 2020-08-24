<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Administrado;

class BookController extends Controller
{
    //
    public function index()
{
    $libros = Administrado::all();
    return view('ejemplo.todos', ['libros' => $libros->toArray()]);
}

public function show($id)
{
	

    $libro = Administrado::find($id);
    $this->withoutExceptionHandling();
    if (!is_null($libro)){
        return view('ejemplo.mostrar', ['Administrado' => $libro->toArray()]);
   } else {
        return response('no encontrado', 404);
    }
}

public function create()
{
    return view('ejemplo.formlibro');
}

public function store(Request $request)
{
    $this->validate($request, [
        'nombre' => 'required|min:80',
        'numero_administrado' => 'required|min:80',
        'direccion' => 'required|min:100',
        'telefono' => 'required|min:9',
        'id_tipo_documento' => 'required|min:10',
       
    ]);

    Administrado::create($request->all());
    return redirect('/todos');
}


}
