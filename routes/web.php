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
Route::view('nosotros','pages.pages-home.somos')->name('quienes_somos');
Route::view('filosofia','pages.pages-home.filosofia')->name('filosofia');
Route::view('clientes','pages.pages-home.clientes')->name('clientes');

Route::view('ingenieria-electrica','pages.ingenieria')->name('ingenieria');
Route::view('fisica-radiaciones','pages.radiaciones')->name('radiaciones');

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('componentes', 'ComponenteController')->names('componentes')->only(['index','show']);
Route::get('tableros-distribucion', 'TablerosController@index')->name('tableros_distribucion');
Route::get('calidad-energía', 'CalidadController@index')->name('calidad_energía');
Route::get('construccion','ProjectsController@indexConstruccion')->name('construccion');
Route::get('casos-exito','ProjectsController@indexCasosExito')->name('casos-exito');
Route::get('blindaje','ProjectsController@indexBlindaje')->name('blindaje');
Route::get('cristales','ProjectsController@indexCristales')->name('cristales');
Route::get('puertas','ProjectsController@indexPuertas')->name('puertas');
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
    Route::resource('citas', 'admin\CitesController')->names('cites')->parameters(['cites' => 'id']);
    Route::resource('cotizaciones', 'admin\QuotesController')->names('quotes')->parameters(['quotes' => 'id']);
    Route::resource('categorias', 'admin\SubcategoriesController')->names('subcategories')->parameters(['subcategories' => 'id'])->except(['update']);
    Route::post('categorias/{id}', 'admin\SubcategoriesController@update')->name('subcategories.update');
    Route::resource('proyectos', 'admin\ProjectsController')->names('projects')->parameters(['projects' => 'id'])->except(['update']);
    Route::post('proyectos/{id}', 'admin\ProjectsController@update')->name('projects.update');
});
// ALL USERS ROUTES
Route::group(['middleware' => ['role:superadmin|moderator|guest','auth']], function () {
    //
});