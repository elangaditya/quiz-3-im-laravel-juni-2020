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
    return view('home');
});

Route::get('/artikel', 'ArtikelController@index');
Route::get('/artikel/{id}', 'ArtikelController@show');
Route::get('/create', 'ArtikelController@create'); // Menggunakan artikel/create menimbulkan error yang tidak jelas
                                                   // dari mana, sehingga digunakan /create
Route::post('/artikel', 'ArtikelController@store');
Route::get('/artikel/{id}/edit', 'ArtikelController@edit');
Route::put('/artikel/{id}', 'ArtikelController@update');
Route::delete('/artikel/{id}', 'ArtikelController@delete');
