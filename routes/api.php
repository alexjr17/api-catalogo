<?php

use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('user/profile',[ UserController::class, 'profile']);

    Route::apiResource('marcas', MarcaController::class)->only('index', 'store', 'edit', 'update', 'destroy');
    Route::get('marcas/get_marcas', [MarcaController::class, 'get_marcas']);

    Route::apiResource('productos', ProductoController::class)->only('index', 'store', 'edit', 'update', 'destroy');
});
