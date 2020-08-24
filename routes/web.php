<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// primeras rutas en el aprendizaje con laravel

Route:: get('/usuarios/', 'UserController@index');


Route:: get('/usuarios/{id}', 'UserController@show')->where('id', '[0-9]+')->name('users.show');

Route:: get('/usuarios/nuevo', 'UserController@create');

route::get('ejemplo/{id}', 'BookController@show');

// rutas de usuarios, ejemplo de actualizar

Route::put("/usuarios/{user}", 'UserController@update')->where('user' , "[0-9]+");

Route::get("/usuarios/{user}/editar", 'UserController@editar');

// vista deparatamento 
Route::get("/departamento.registro_departamento", 'DepartamentoController@creardepar');

Route::post('/registros_departamento', 'DepartamentoController@registrodepar'); 

// vista de oficina

Route::get('/oficina.registro_oficina', 'OficinaController@crearoficina');

Route::post("/registrooficina", 'OficinaController@registraroficina');

//vista tupa

Route::get('/tupa.registro_tupa', 'TupaController@creartupa');

Route::post('/registrotupa', 'TupaController@registrartupa');

// ----------------------------------------------------
// ruta para el ingreso principal del sistemna web
Route:: get('/principal', function(){
	return view('layout');
});

Route:: get('/inicio', function(){
	return view('inicio');
});

// ruta para la tabla clientes
Route::resource('cliente', 'ClienteController');
//una nueva ruta para eliminar registros con el metodo get
Route::get('cliente/destroy/{id}', ['as' => 'cliente/destroy', 'uses'=>'ClienteController@destroy']);
//ruta para realizar busqueda de registros.
Route::post('cliente/search', ['as' => 'cliente/search', 'uses'=>'ClienteController@search']);

// ruta para los indicadores
Route::resource('eficiencia', 'EficienciaController');

Route::resource('eficacia', 'EficaciaController');

// resource de la tabla recepcion
Route::resource('recepcion', 'RecepcionController');
//una nueva ruta para eliminar registros con el metodo get
Route::get('recepcion/destroy/{id}', ['as' => 'recepcion/destroy', 'uses'=>'RecepcionController@destroy']);
//ruta para realizar busqueda de registros.
Route::post('recepcion/search', ['as' => 'recepcion/search', 'uses'=>'RecepcionController@search']);


// resource de la tabla atencion
Route::resource('atencion', 'AtencionController');
//una nueva ruta para eliminar registros con el metodo get
Route::get('atencion/destroy/{id}', ['as' => 'atencion/destroy', 'uses'=>'AtencionController@destroy']);
//ruta para realizar busqueda de registros.
Route::post('atencion/search', ['as' => 'atencion/search', 'uses'=>'AtencionController@search']);

// recurso tabla movimiento
Route::resource('movimiento', 'MovimientoController');
//una nueva ruta para eliminar registros con el metodo get
Route::get('movimiento/destroy/{id}', ['as' => 'movimiento/destroy', 'uses'=>'MovimientoController@destroy']);
//ruta para realizar busqueda de registros.
Route::post('movimiento/search', ['as' => 'movimiento/search', 'uses'=>'MovimientoController@search']);
// ruta para la vista archivos
Route::resource('archivo', 'ArchivoController');

// ruta para visualizar los archivos almacenados

Route::get('storage/{archivo}', function ($archivo) {
     $public_path = public_path();
     $url = $public_path.'/storage/'.$archivo;
     //verificamos si el archivo existe y lo retornamos
     if (Storage::exists($archivo))
     {
       return response()->download($url);
     }
     //si no se encuentra lanzamos un error 404.
     abort(404);
 
});

// recurso para tabla expediente
Route::resource('expediente', 'ExpedienteController');
//una nueva ruta para eliminar registros con el metodo get
Route::get('expediente/destroy/{id}', ['as' => 'expediente/destroy', 'uses'=>'ExpedienteController@destroy']);
//ruta para realizar busqueda de registros.
Route::post('expediente/search', ['as' => 'expediente/search', 'uses'=>'ExpedienteController@search']);


// ejemplo de editar y eliminar
Route::resource('movie','MovieController');

//una nueva ruta para eliminar registros con el metodo get
Route::get('movie/destroy/{id}', ['as' => 'movie/destroy', 'uses'=>'MovieController@destroy']);
//ruta para realizar busqueda de registros.
Route::post('movie/search', ['as' => 'movie/search', 'uses'=>'MovieController@search']);

/////////////////////////////////////
///  consumir la API REST en estas rutas para el ejemplo  de vue crud

Route::get('/inicio', 'InicioController@index');

Route::put('/inicio/actualizar', 'InicioController@update');

Route::post('/inicio/guardar', 'InicioController@store');

Route::delete('/inicio/borrar/{id}', 'InicioController@destroy');

Route::get('/inicio/buscar', 'InicioController@show');

