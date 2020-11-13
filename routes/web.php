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
Route::view('cristales','pages.cristales.index')->name('cristales');
Route::view('puertas','pages.puertas.index')->name('puertas');
Route::view('contacto','pages.contacto.index')->name('contacto');
Route::get('getCites', 'admin\CitesController@getCites')->name('getCites');
// Email
Route::post('sendEmailCotizacion', 'EmailController@sendEmailCotizacion')->name('sendEmailCotizacion');
Route::post('sendEmailCite', 'EmailController@sendEmailCite')->name('sendEmailCite');
// MIDDLEWARE
// ONLY ADMIN ROUTES
Route::group(['middleware' => ['role:superadmin','auth']], function () {
    // Route::resource('citas', 'admin\CitesController@index')->names('tournaments')->parameters(['tournaments' => 'id'])->except(['update']);
});

// ADMIN && MODERATOR ROUTES
Route::group(['middleware' => ['role:superadmin|moderator','auth']], function () {
    Route::get('dashboard', 'admin\AdminController@index')->name('admin.index');
    // Route::get('citas', 'admin\CitesController@index')->name('cites.index');
    Route::resource('citas', 'admin\CitesController')->names('cites')->parameters(['cites' => 'id']);
});

// ALL USERS ROUTES
Route::group(['middleware' => ['role:superadmin|moderator|guest','auth']], function () {

});