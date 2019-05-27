<?php

namespace App\Http\Controllers;

use App\Comandas;
use Illuminate\Http\Request;

class ComandasController extends Controller
{
    public function index()
    {

    }

    public function list()
    {
        $datos['comandas'] = Comandas::paginate(100);
        return $datos;
    }

    public function create()
    { }

    public function store(Request $request)
    {
        $comanda = request()->except('_token');

        Comandas::insert($comanda);
    }

    public function show($id)
    {
        return Comandas::find($id);
    }

    public function edit($id)
    {
        $comanda = Comandas::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $comanda =  array(
            'idUsuario' => $request->idUsuario,
            'idMesa' => $request->idMesa,
            'status' => $request->status
        );
        Comandas::where('id', '=', $id)->update($comanda);
    }

    public function destroy($id)
    {
        Comandas::destroy($id);
    }
}
