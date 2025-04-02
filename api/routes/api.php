<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\Api\ProductsController;
Use App\Http\Controllers\Api\IndexController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::resource('products',ProductsController::class);
Route::resource('index',IndexController::class);

