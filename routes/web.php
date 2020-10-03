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
// Public routes
Auth::routes();
Route::view('/','pages.quienes-somos')->name('/');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('componentes', 'ComponenteController')->names('componentes')->only(['index','show']);
Route::get('tableros-distribucion', 'TablerosController@index')->name('tableros_distribucion');
Route::get('calidad-energía', 'CalidadController@index')->name('calidad_energía');
Route::view('construccion','pages.construccion.index')->name('construccion');
Route::view('casos-exito','pages.casos-exito.index')->name('casos-exito');
Route::view('blindaje','pages.blindaje.index')->name('blindaje');