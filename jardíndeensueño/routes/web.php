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
Route::post('/onay', 'HomeController@create');
Route::get('/kabul', 'HomeController@createView');
Route::get('/kayıt', 'HomeController@indexView');
Route::get('/sil/{id}', 'HomeController@delete')->where(array('id' => '[0-9]+'));
Route::post('/guncelle/{id}', 'HomeController@update')->where(array('id' => '[0-9]+'));
Route::get('/guncelle/{id}','HomeController@updateView')->where(array('id' => '[0-9]+'));
