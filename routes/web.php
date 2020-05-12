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

Route::resource('orden', 'OrdenController');

Route::get('Factura-pdf', 'OrdenController@exportPdf')->name('Factura.pdf');

Route::resource('cita', 'CitaController');

Route::resource('pedido', 'PedidoController');

Route::resource('galeria', 'GaleriaController');

Route::post('galeria/cargar', 'GaleriaController@upload')->name('galeria.upload');

Route::resource('pago', 'PagoController');

Route::get('Factura-pdf', 'PagoController@exportPdf')->name('Factura.pdf');

Route::post('/payment', 'PagoController@pay')->name('payment');

