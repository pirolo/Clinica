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

Route::get('/', 'PagesController@home')->name('/');

Route::get('/medicos/create', 'MedicosController@create')->name('addMedico');
Route::post('/medicos/create', 'MedicosController@store')->name('storeMedico');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
