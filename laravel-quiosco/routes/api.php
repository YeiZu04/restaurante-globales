<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route :: apiResource( '/categorias' , CategoriaController::class) ;// ruta para traer categorias

Route :: apiResource( '/productos' , ProductoController::class) ;// ruta para traer productos