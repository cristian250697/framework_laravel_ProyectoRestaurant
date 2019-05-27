<?php

namespace App\Http\Controllers;

use App\Mesas;
use Illuminate\Http\Request;

class MesasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function list()
    {
        $datos['mesas'] = Mesas::paginate(100);
        return $datos;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mesa = request()->except('_token');

        Mesas::insert($mesa);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mesas  $mesas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Mesas::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mesas  $mesas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mesa = Mesas::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mesas  $mesas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mesa =  array(
            'mesa'=>$request->mesa,
            'status'=>$request->status
        );
        Mesas::where('id','=',$id)->update($mesa);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mesas  $mesas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Mesas::destroy($id);
    }
}
