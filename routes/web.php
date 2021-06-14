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


//Auth::routes(['register' => false]);
Auth::routes();

Route::get('/adm', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function() {
Route::get('/adm/sliders/{seccion}', 'adm\SliderController@index')->name('slider');
Route::get('/adm/sliders/create/{seccion}', 'adm\SliderController@create')->name('nuevoslider');
Route::post('/adm/sliders/create/{seccion}','adm\SliderController@store')->name('crearslider');
Route::get('/adm/sliders/edit/{seccion}/{id}','adm\SliderController@edit')->name('editslider');
Route::put('/adm/sliders/update/{seccion}/{id}', 'adm\SliderController@update')->name('updateslider');
Route::get('/adm/sliders/eliminar/{id}', 'adm\SliderController@destroy')->name('eliminarslider');


Route::get('/adm/contenido/edit/{id}', 'adm\ContenidoController@edit')->name('editarcontenido');
Route::put('/adm/contenido/update/{id}', 'adm\ContenidoController@update')->name('updatecontenido');

//icono
Route::get('adm/icono', 'adm\EmpresaController@index')->name('icono');
Route::get('adm/icono/create', 'adm\EmpresaController@create')->name('nuevoicono');
Route::post('adm/icono/create', 'adm\EmpresaController@store')->name('crearicono');
Route::get('adm/icono/edit/{id}', 'adm\EmpresaController@edit')->name('editaricono');
Route::put('adm/icono/update/{id}', 'adm\EmpresaController@update')->name('updateicono');
Route::get('adm/icono/eliminar/{id}', 'adm\EmpresaController@destroy')->name('eliminaricono');	

//productos
Route::get('adm/productos', 'adm\ProductoController@index')->name('productos');
Route::get('adm/productos/create', 'adm\ProductoController@create')->name('nuevoproducto');
Route::post('adm/productos/create', 'adm\ProductoController@store')->name('crearproducto');
Route::get('adm/productos/edit/{id}', 'adm\ProductoController@edit')->name('editarproducto');
Route::put('adm/productos/update/{id}', 'adm\ProductoController@update')->name('updateproducto');
Route::get('adm/productos/eliminar/{id}', 'adm\ProductoController@destroy')->name('eliminarproducto');

	//contenido aplicaciones
	Route::get('adm/aplicaciones', 'adm\AplicacionesController@index')->name('aplicaciones');
	Route::get('adm/aplicaciones/create', 'adm\AplicacionesController@create')->name('nuevaaplicacion');
	Route::post('adm/aplicaciones/create', 'adm\AplicacionesController@store')->name('crearaplicacion');
	Route::get('adm/aplicaciones/edit/{id}', 'adm\AplicacionesController@edit')->name('editaraplicacion');
	Route::put('adm/aplicaciones/update/{id}', 'adm\AplicacionesController@update')->name('updateaplicacion');
	Route::get('adm/aplicaciones/eliminar/{id}', 'adm\AplicacionesController@destroy')->name('eliminaraplicacion');

		//colores
		Route::get('colores', 'adm\ColoreController@index')->name('colores');
		Route::get('colores/create', 'adm\ColoreController@create')->name('nuevocolores');
		Route::post('colores/create', 'adm\ColoreController@store')->name('crearcolores');
		Route::get('colores/edit/{id}', 'adm\ColoreController@edit')->name('editarcolores');
		Route::put('colores/update/{id}', 'adm\ColoreController@update')->name('updatecolores');
		Route::get('colores/eliminar/{id}', 'adm\coloreController@destroy')->name('eliminarcolores');


});