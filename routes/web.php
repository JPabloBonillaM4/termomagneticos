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
