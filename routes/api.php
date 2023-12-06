<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\ProductosController;

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

Route::post('/signup', [AuthController::class, 'signup']);
Route::post('/login', [AuthController::class, 'login']);

Route::prefix('productos')->group(function () {
    Route::get('/', [ProductosController::class, 'get']);
    Route::get('/{id}', [ProductosController::class, 'getById']);
    Route::put('/{id}', [ProductosController::class, 'update']);
    Route::delete('/{id}', [ProductosController::class, 'delete']);
    Route::post('/', [ProductosController::class, 'create']);
});
