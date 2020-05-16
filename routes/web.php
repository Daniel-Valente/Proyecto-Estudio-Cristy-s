<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('orden', 'OrdenController')->middleware('auth');

Route::resource('pago', 'PagoController')->middleware('auth');

Route::get('Factura-pdf','PagoController@exportPdf')->name('Factura.pdf')->middleware('auth');

Route::resource('orden.pago', 'OrdenPagoController')->middleware('auth');

Route::resource('cita', 'CitaController')->middleware('auth');;

Route::resource('pedido', 'PedidoController')->middleware('auth');;

Route::resource('galeria', 'GaleriaController')->middleware('auth');;

Route::resource('perfil', 'PerfilController')->middleware('auth');;

Route::post('galeria/cargar', 'GaleriaController@upload')->name('galeria.upload');

