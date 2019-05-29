<?php

namespace App\Http\Controllers;

use App\Comandas_Productos;
use Illuminate\Http\Request;
use DB;

class ComandasProductosController extends Controller
{
    public function index()
    {
        $datos['comandas'] = DB::table('comandas_productos')
        ->join('productos', 'productos.id', '=', 'comandas_productos.productoIdPlatillo')
        ->join('comandas', 'comandas.id', '=', 'comandas_productos.comandaIdComanda')
        ->join('mesas', 'mesas.id', '=', 'comandas.idMesa')
        ->join('usuarios', 'usuarios.id', '=', 'comandas.idUsuario')
        ->select('mesas.mesa', 'productos.nombre as nombre_producto', 'productos.descripcion', 'usuarios.nombre', 'usuarios.apellido', 'productos.imagen')->get();

        return view('index', $datos);
    }

    public function list()
    {
        $datos['comandasProductos'] = Comandas_Productos::paginate(100);
        return $datos;
    }

    public function create()
    { }

    public function store(Request $request)
    {
        $comandaProducto = request()->except('_token');

        Comandas_Productos::insert($comandaProducto);
    }

    public function show($id)
    {
        return Comandas_Productos::find($id);
    }

    public function edit($id)
    {
        $comandaProductos = Comandas_Productos::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $comanda =  array(
            'productoIdPlatillo' => $request->productoIdPlatillo,
            'comandaIdComanda' => $request->comandaIdComanda
        );
        Comandas_Productos::where('id', '=', $id)->update($comanda);
    }

    public function destroy($id)
    {
        Comandas_Productos::destroy($id);
    }
}
