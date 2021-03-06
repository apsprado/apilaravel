<?php

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

Route::get('/products', [App\Http\Controllers\ProductController::class, 'all']);
Route::post('/product', [App\Http\Controllers\ProductController::class, 'create']);
Route::post('/product/update/{id}', [App\Http\Controllers\ProductController::class, 'update']);
Route::post('/product/delete/{id}', [App\Http\Controllers\ProductController::class, 'delete']);

