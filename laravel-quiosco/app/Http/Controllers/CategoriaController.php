<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriaRequest;
use App\Http\Resources\CategoriaCollection;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index(){
       // return response()->json(['categorias' => Categoria::all()]);  
        return new CategoriaCollection(Categoria::all());
    }

    public function store(CategoriaRequest $request){
        $categoria = Categoria::create($request->validated());
        return response()->json([
            'message' => 'Categoria registrada con éxito',
            'categoria' => $categoria,
        ], 201);
    }


    public function destroy(Categoria $categoria){
        $categoria->delete();
        return response()->json([
            'message' => 'Categoria eliminada con éxito',
        ]);
    }
}
