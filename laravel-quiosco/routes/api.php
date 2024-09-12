<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route :: apiResource( '/categorias' , CategoriaController::class) ;// ruta para traer categorias

Route :: apiResource( '/productos' , ProductoController::class) ;// ruta para traer productos

//autenticacion
Route::post('/registro', [AuthController::class, 'register']);