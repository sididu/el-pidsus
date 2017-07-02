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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('jabatan', 'JabatanController@index');

Route::get('Obyek', 'ObyekController@index');

Route::get('Pasal', 'PasalController@index');

Route::get('Rp1', 'Rp1Controller@index');

Route::get('Rp2', 'Rp2Controller@index');

Route::get('Rp3mum', 'Rp3mumController@index');

Route::get('Rp3sus', 'Rp3susController@index');

Route::get('Subyek', 'SubyekController@index');

Route::get('User', 'UserController@index');


