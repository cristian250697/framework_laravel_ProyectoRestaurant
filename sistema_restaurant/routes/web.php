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
    return view('index');
});

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