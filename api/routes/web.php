<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/send-email',[UsersController::class,'sendEmail']);
Route::get('/admin',function(){
return view('admin.index');
});
Auth::routes();
Route::get('/admin/products',function(){
    return view('admin.products');
});

Route::get('/admin/users',function(){
    return view('admin.users');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/venta', function(){
    return view('admin.venta');
});
Route::get('/admin/vehiculo', function(){
    return view('admin.vehiculo');
});