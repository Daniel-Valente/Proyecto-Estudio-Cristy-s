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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::resource('orden', 'OrdenController')->middleware('auth');

Route::get('FacturaOrdenes-pdf','OrdenController@exportPdf')->name('FacturaOrdenes.pdf')->middleware('auth');

Route::get('pagos', 'OrdenController@pagoIndex')->name('pagosIndex')->middleware('auth');

Route::resource('pago', 'PagoController')->middleware('auth');

Route::get('Factura-pdf/{pago}','PagoController@exportPdf')->name('Factura.pdf')->middleware('auth');

Route::resource('orden.pago', 'OrdenPagoController')->middleware('auth');

Route::resource('cita', 'CitaController')->middleware('auth');

Route::resource('pedido', 'PedidoController')->middleware('auth');

Route::resource('galeria', 'GaleriaController')->middleware('auth');

Route::get('galeria/{galeria}/descargar', 'GaleriaController@download')->name('galeria.download')->middleware('auth');

Route::post('galeria/{galeria}/borrar', 'GaleriaController@delete')->name('galeria.delete')->middleware('auth');

Route::resource('usuario', 'UserController')->middleware('auth');

Route::post('galeria/cargar', 'GaleriaController@upload')->name('galeria.upload')->middleware('auth');

Route::post('/contacto', 'MessagesController@store')->name('messages.store')->middleware('auth');

Route::get('/login/{provider}', 'SocialAuthController@redirectToProvider');

Route::get('/login/{provider}/callback', 'SocialAuthController@handleProviderCallback');

Route::get('/usersJson', 'ApiController@index')->name('usersJson')->middleware('auth');

Route::resource('tipo', 'TipoController')->middleware('auth');
