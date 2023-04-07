<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::controller(\App\Http\Controllers\ProductController::class)->group(function (){
    Route::get('product','index');
    Route::get('product/{id}','show');
    Route::post('create_product','store');
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
