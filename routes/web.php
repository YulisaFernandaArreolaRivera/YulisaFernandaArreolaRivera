<?php
require 'admin.php';

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/inicio', 'App\Http\Controllers\InicioController@inicio');
Route::get('/quienessomos', 'App\Http\Controllers\QuienessomosController@quienessomos');
Route::resource('/productos', 'App\Http\Controllers\ProductsController');
Route::resource('/Ofertas', 'App\Http\Controllers\OfertasController');


Route::view('/admin', 'admin.dashboard.index');
Route::get('/Contacts', [App\Http\Controllers\Admin\VistaController::class,'Contacts'])->name('Contacts');

Route::resource('/productos', 'App\Http\Controllers\ProductsController'); 
Route::get('/productos/categoria/{id}', 'App\Http\Controllers\ProductsController@productsByCategory')->name('productos.categoria');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



