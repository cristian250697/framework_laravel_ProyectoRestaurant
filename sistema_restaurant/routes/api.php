<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::post('usuarios-crear', 'UsuariosController@store');
// Route::delete('usuarios-borrar/{id}','UsuariosController@destroy');

Route::resource('usuarios', 'UsuariosController');
Route::resource('comandas', 'ComandasController');
Route::resource('comandasProductos', 'ComandasProductosController');
Route::resource('mesas', 'MesasController');
Route::resource('tickets', 'TicketsController');
Route::resource('productos', 'ProductosController');

Route::get('productos/list','ProductosController@list');
Route::get('usuarios/list','UsuariosController@list');
Route::get('comandasProducto/list','ComandasProductosController@list');
Route::get('mesas/list','MesasController@list');
Route::get('tickets/list','TicketsController@list');
Route::get('comandas/list','ComandasController@list');
