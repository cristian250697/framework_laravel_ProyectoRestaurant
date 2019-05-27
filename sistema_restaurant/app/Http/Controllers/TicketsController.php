<?php

namespace App\Http\Controllers;

use App\Tickets;
use Illuminate\Http\Request;

class TicketsController extends Controller
{
    public function index()
    { }

    public function list()
    {
        $datos['tickets'] = Tickets::paginate(100);
        return $datos;
    }

    public function create()
    { }

    public function store(Request $request)
    {
        $ticket = request()->except('_token');

        Tickets::insert($ticket);
    }

    public function show($id)
    {
        return Tickets::find($id);
    }

    public function edit($id)
    {
        $ticket = Tickets::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $comanda =  array(
            'subTotal' => $request->subTotal,
            'total' => $request->total,
            'fecha' => $request->fecha,
            'idComanda' => $request->idComanda
        );
        Tickets::where('id', '=', $id)->update($comanda);
    }

    public function destroy($id)
    {
        Tickets::destroy($id);
    }
}
