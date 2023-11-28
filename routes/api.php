<?php

use App\Http\Controllers\API\ProductosController;
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

Route::prefix('v1/productos')->group(function () {

    Route::get('/',[ ProductosController::class, 'get']);
    /*Route::get('/{id}',[ PersonaController::class, 'getById']);
    Route::post('/',[ PersonaController::class, 'create']);
    Route::put('/{id}',[ PersonaController::class, 'update']);
    Route::delete('/{id}',[ PersonaController::class, 'delete']);
    */

 });

