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

Route::get('/home', 'HomeController@index');
Route::get('/admin', 'HomeController@index');
Route::get('/trial', 'HomeController@trial');
Route::get('master_penyidikan', 'HomeController@master_penyidikan');
Route::get('master_penuntutan', 'HomeController@master_penuntutan');

Route::resource('pengumuman', 'PengumumanController');

/*
|--------------------------------------------------------------------------
| Kategori Jabatan Tersangka Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('penyidikan', 'LayoutController@penyidikan');

/*
|--------------------------------------------------------------------------
| Kategori Jabatan Tersangka Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('jabatan', 'JabatanController@index');

Route::get('jabatan_create', 'JabatanController@jabatan_create');

Route::get('jabatan_edit', 'JabatanController@jabatan_edit');

/*
|--------------------------------------------------------------------------
| Obyek [Benda Sitaan] Routes
|--------------------------------------------------------------------------
|
| frb1 = surat perintah geledah
| erb1 = surad edit benda sitaan [Berita Acara Penyitaan]
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('obyek', 'ObyekController@index');

Route::get('geledah', 'ObyekController@geledah');

Route::get('erb1', 'ObyekController@erb1');

/*
|--------------------------------------------------------------------------
| Pasal Disangkakan Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('pasal','PasalController');


// Route::get('pasal', 'PasalController@index');

// Route::get('fpasal', 'PasalController@fpasal');

// Route::get('epasal', 'PasalController@epasal');

/*
|--------------------------------------------------------------------------
| RP-1 Routes
|--------------------------------------------------------------------------
|
| erp1 = Edit Kasus
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('rp1', 'Rp1Controller@index');

Route::get('frp1', 'Rp1Controller@frp1');

Route::get('erp1', 'Rp1Controller@erp1');

/*
|--------------------------------------------------------------------------
| RP-2 Routes
|--------------------------------------------------------------------------
|
| frp2 adalah form dari RP-1 untuk masuk daftar rp2
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('rp2', 'Rp2Controller@index');

Route::get('frp2', 'Rp2Controller@frp2');

Route::get('erp2', 'Rp2Controller@erp2');

/*
|--------------------------------------------------------------------------
| RP-3mum Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('rp3mum', 'Rp3mumController@index');

Route::get('frp3mum', 'Rp3mumController@frp3mum');

Route::get('erp3mum', 'Rp3mumController@erp3mum');

/*
|--------------------------------------------------------------------------
| RP-3sus Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('rp3sus', 'Rp3susController@index');

Route::get('frp3sus', 'Rp3susController@frp3sus');

Route::get('erp3sus', 'Rp3susController@erp3sus');

/*
|--------------------------------------------------------------------------
Subyek [Tersangka] Routes
|--------------------------------------------------------------------------
|
| frt1 = Surat Penetapan Tersangka
| frt2 = surat perintah penahanan
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('subyek', 'SubyekController@index');

Route::get('frt1', 'SubyekController@frt1');

Route::get('frt2', 'SubyekController@frt2');

Route::get('ert1', 'SubyekController@ert1');

/*
|--------------------------------------------------------------------------
| User [Jaksa Penyidik] Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('user', 'UserController@index');

Route::get('fjaksa', 'UserController@fjaksa');

Route::get('ejaksa', 'UserController@ejaksa');


