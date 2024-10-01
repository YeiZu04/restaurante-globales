<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Http\Resources\ProductoCollection;
use Illuminate\Http\Request;
use App\Http\Requests\ProductoRequest;
class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new ProductoCollection(Producto::where('disponible', 1)->orderBy('id', 'Desc')->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductoRequest $request)
    {
        // Crear el nuevo producto utilizando los datos validados
        $producto = Producto::create($request->validated());

        return response()->json([
            'message' => 'Producto registrado con éxito',
            'producto' => $producto,
        ], 201);
    }

  
    /**
     * Update the specified resource in storage.
     */
    public function update( Producto $producto)
    {
        $producto->disponible = 0;
        $producto->save();
        return [
            'producto' => $producto
        ];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return response()->json([
            'message' => 'Producto eliminado con éxito',
        ]);
    }
}
