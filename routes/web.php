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

});