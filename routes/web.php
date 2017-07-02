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

Route::get('obyek', 'ObyekController@index');

Route::get('pasal', 'PasalController@index');

Route::get('rp1', 'Rp1Controller@index');

Route::get('rp2', 'Rp2Controller@index');

Route::get('rp3mum', 'Rp3mumController@index');

Route::get('rp3sus', 'Rp3susController@index');

Route::get('subyek', 'SubyekController@index');

Route::get('user', 'UserController@index');


