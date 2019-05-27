<?php

namespace App\Http\Controllers;

use App\Productos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['productos'] = Productos::paginate(100);
        return view('products', $datos);
    }

    public function list()
    {
        $datos['productos'] = Productos::paginate(100);
        return $datos;
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
        // $producto = request()->all();
        // return response()->json($producto);
        $producto = request()->except('_token');

        // Recolectar fotografia
        if ($request->hasFile('imagen')) {
            $producto['imagen'] = $request->file('imagen')->store('uploads', 'public');
        }

        Productos::insert($producto);

        return redirect('productos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return Productos::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $producto = Productos::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $producto = request()->except(['_token', '_method']);

        // Recolectar fotografia
        if ($request->hasFile('imagen')) {
            $producto = Productos::findOrFail($id);

            Storage::delete('public/'. $producto->imagen);

            $producto['imagen'] = $request->file('imagen')->store('uploads', 'public');
        }

        $cosa =  array(
            'nombre'=>$request->nombre,
            'descripcion'=>$request->descripcion,
            'precio'=>$request->precio,
            'status'=>$request->status,
            'tipo'=>$request->tipo,
            'imagen'=>$producto->imagen,
        );
        Productos::where('id','=',$id)->update($cosa);

        return redirect('productos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function destroy($idProducto)
    {

        $producto = Productos::findOrFail($idProducto);

        if(Storage::delete('public/'. $producto->imagen)){
            Productos::destroy($idProducto);    
        }      

        return redirect('productos');
    }
}
