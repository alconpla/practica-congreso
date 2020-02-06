<?php

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

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('congreso', 'CongresoController');
Route::resource('pago', 'PagoController');
Route::resource('ponencia', 'PonenciaController');
Route::resource('user_ponencia', 'UserPonenciaController');
Route::resource('usuario', 'UserController');
