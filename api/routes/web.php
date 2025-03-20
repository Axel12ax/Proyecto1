<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VentasController;
use App\Http\Controllers\VehiculosController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\SubastaController;
use App\Http\Controllers\MarcaController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/send-email',[UsersController::class,'sendEmail']);
Route::get('/admin',function(){
return view('admin.index');
});
Auth::routes();


Route::get('/admin/users',function(){
    return view('admin.users');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/venta', function(){
    return view('admin.venta');
});
Route::get('/admin/marca', function(){
    return view('admin.marca');
});

Route::get('admin/venta', [VentasController::class, 'index']);

Route::get('admin/vehiculo', [VehiculosController::class, 'index']);

Route::get('admin/users', [UsersController::class, 'index']);
//Route::get('admin/vehiculo', [VehiculosController::class, 'SelectMC']);

Route::post('admin/vehiculo', [VehiculosController::class, 'create']);

Route::delete('admin/vehiculo/{id}', [VehiculosController::class, 'delete']);
Route::post('admin/vehiculo/{id}', [VehiculosController::class, 'edit']);

Route::delete('admin/users/{id}', [UsersController::class, 'delete']);
Route::post('admin/users', [UsersController::class, 'create']);

Route::post('admin/vehiculo/{id}', [VehiculosController::class, 'edit']);

Route::post('admin/users/{id}', [UsersController::class, 'edit']);  


Route::get('admin/subasta', [SubastaController::class, 'index']);

Route::get('admin/products', [CategoriasController::class, 'index']);
Route::post('admin/products', [CategoriasController::class, 'createC']);
Route::delete('admin/products/{id}', [CategoriasController::class, 'deleteC']);

Route::get('admin/marca', [MarcaController::class, 'index']);
Route::post('admin/marca', [MarcaController::class, 'createM']);
Route::delete('admin/marca/{id}', [MarcaController::class, 'deleteM']);
