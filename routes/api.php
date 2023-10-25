<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestApiController;
use App\Http\Controllers\AccionController;


use App\Http\Controllers\Test\Api\CrudController;
use App\Http\Controllers\Test\TestFileController;





/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::apiResource('test_api', TestApiController::class);

/* crud basico */

/* Route::apiResource('test_api_crud', CrudController::class)->middleware('cors'); */

Route::get('test_api_crud', [CrudController::class, 'index']);
Route::post('test_api_crud', [CrudController::class, 'store']);
Route::put('test_api_crud/{id}', [CrudController::class, 'update']);
Route::delete('test_api_crud/{id}', [CrudController::class, 'destroy']);


/* Route::get('acciones',[AccionController::class,'index']); */

Route::apiResource('acciones', AccionController::class);

Route::post('file', [TestFileController::class, 'file']);
