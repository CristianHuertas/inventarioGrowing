<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto= new Producto();
        $producto->nombre= $request->nombre;
        $producto->descripcion= $request->descripcion;
        $producto->precio= $request->precio;
        $producto->stock= $request->stock;
        $producto->save();
        return redirect()->route('productos-index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $producto = Producto::find($request->id);
        return view('productos.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $producto = Producto::find($request->id);

        //dd($producto);
        return view('productos.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //dd($request);
        $producto = Producto::find($request->id);
        $producto->nombre= $request->nombre;
        $producto->descripcion= $request->descripcion;
        $producto->precio= $request->precio;
        $producto->stock= $request->stock;
        $producto->save();
        return redirect()->route('productos-index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //dd($producto);
        $producto = Producto::find($request->id);
        $producto->delete();
        return redirect()->route('productos-index');
    }
}
