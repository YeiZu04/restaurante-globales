<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PedidoController;

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::apiResource('/pedidos', PedidoController::class);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::apiResource('/productos', ProductoController::class); // ruta para traer productos
    Route::apiResource('/categorias', CategoriaController::class); // ruta para traer categorias


    Route::post('/registro_producto', [ProductoController::class, 'store']); // ruta para registrar productos
    Route::post('/registro_categoria', [CategoriaController::class, 'store']); // ruta para registrar categorias
    Route::delete('/eliminar_categoria/{categoria}', [CategoriaController::class, 'destroy']); // ruta para eliminar categorias
    Route::delete('/eliminar_producto/{producto}', [ProductoController::class, 'destroy']); // ruta para eliminar productos

});


//autenticacion
Route::post('/registro', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
