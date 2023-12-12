<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\BodegasController;
use App\Http\Controllers\API\GruposProductosController;
use App\Http\Controllers\API\ProductosController;
use App\Http\Controllers\API\TiposTransaccionesController;

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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::group(['middleware' => ['cors']], function () {

    Route::post('/signup', [AuthController::class, 'signup']);
    Route::post('/login', [AuthController::class, 'login']);

    Route::prefix('productos')->group(function () {
        Route::get('/', [ProductosController::class, 'get']);
        Route::get('/{id}', [ProductosController::class, 'getById']);
        Route::put('/{id}', [ProductosController::class, 'update']);
        Route::delete('/{id}', [ProductosController::class, 'delete']);
        Route::post('/', [ProductosController::class, 'create']);
    });

    Route::prefix('bodegas')->group(function () {
        Route::get('/', [BodegasController::class, 'get']);
        Route::get('/{id}', [BodegasController::class, 'getById']);
        Route::put('/{id}', [BodegasController::class, 'update']);
        Route::delete('/{id}', [BodegasController::class, 'delete']);
        Route::post('/', [BodegasController::class, 'create']);
    });

    Route::prefix('GruposProductos')->group(function () {
        Route::get('/', [GruposProductosController::class, 'get']);
        Route::get('/{id}', [GruposProductosController::class, 'getById']);
        Route::put('/{id}', [GruposProductosController::class, 'update']);
        Route::delete('/{id}', [GruposProductosController::class, 'delete']);
        Route::post('/', [GruposProductosController::class, 'create']);
    });

    Route::prefix('TiposTransacciones')->group(function () {
        Route::get('/', [TiposTransaccionesController::class, 'get']);
        Route::get('/{id}', [TiposTransaccionesController::class, 'getById']);
        Route::put('/{id}', [TiposTransaccionesController::class, 'update']);
        Route::delete('/{id}', [TiposTransaccionesController::class, 'delete']);
        Route::post('/', [TiposTransaccionesController::class, 'create']);
    });

});
