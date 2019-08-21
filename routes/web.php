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


Route::get('inicio', 'viewController@view');
Route::get('inicio/A765', 'viewController@view');
Route::get('mostrarvehi', 'CarroController@index')->name('mostrarvehi');
Route::get('registrarvehi', 'RegistrarController@index')->name('registrarvehi');
Route::post('registrarvehi', 'CarroController@store')->name('registrarvehi');
Route::get('estadisti','CarroController@estadistica')->name('estadisti');





Route::post('post', 'PostController@store');

Auth::routes();

Route::get('', 'HomeController@index')->name('home');
