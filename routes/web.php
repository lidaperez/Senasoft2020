<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





Route::get('/', function () {
    return view('auth.login');
});
Route::get('/home', 'HomeController@index')->middleware('auth');

Route::resource('/producto', 'ProductoController')->middleware('auth');
Route::resource('/persona', 'PersonaController')->middleware('auth');
Route::resource('/bodega', 'BodegaController')->middleware('auth');
Route::resource('/empresa', 'EmpresaController')->middleware('auth');
Route::resource('/factura', 'FacturaController')->middleware('auth');
Route::resource('/proveedor', 'ProveedorController')->middleware('auth');
Route::get('/bodega_producto/{id}', 'BodegaController@bodega_producto')->name('bodega.producto')->middleware('auth');
Route::get('/bodega_producto_create/{id}', 'BodegaController@bodega_producto_create')->name('bodega.producto.create')->middleware('auth');
Route::post('/bodega_producto_registro/{id}', 'BodegaController@bodega_producto_registro')->name('bodega.registro.producto')->middleware('auth');


Auth::routes();
