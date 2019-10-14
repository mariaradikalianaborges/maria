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

Auth::routes();

Route::get('my-captcha', 'HomeController@myCaptcha')->name('myCaptcha');

Auth::routes();

Route::post('my-captcha', 'HomeController@myCaptchaPost')->name('myCaptcha.post');

Auth::routes();

Route::get('refresh_captcha', 'HomeController@refreshCaptcha')->name('refresh_captcha');

Route::get('/kategori_artikel','kategori_artikel_controller@index')->name('kategori_artikel.index');
Route::get('/kategori_berita','kategori_berita_controller@index')->name('kategori_berita.index');
Route::get('/kategori_galeri','kategori_galeri_controller@index')->name('kategori_galeri.index');
Route::get('/kategori_pengumuman','kategori_pengumuman_controller@index')->name('kategori_pengumuman.index');
Route::get('/artikel','artikel_controller@index')->name('artikel.index');
Route::get('/berita','berita_controller@index')->name('berita.index');
Route::get('/galeri','galeri_controller@index')->name('galeri.index');
Route::get('/pengumuman','pengumuman_controller@index')->name('pengumuman.index');

Route::get('/kategori_artikel','kategori_artikel_Controller@index')->name('kategori_artikel.index');
Route::get('/kategori_artikel/create','kategori_artikel_Controller@create')->name('kategori_artikel.create');
Route::post('/kategori_artikel','kategori_artikel_Controller@store')->name('kategori_artikel.store');
Route::get('/kategori_artikel/{id}','kategori_artikel_Controller@show')->name('kategori_artikel.show');
Route::get('/kategori_artikel/{id}','kategori_artikel_Controller@edit')->name('kategori_artikel.edit');
Route::patch('/kategori_artikel/{id}','kategori_artikel_Controller@update')->name('kategori_artikel.update');
Route::delete('/kategori_artikel/{id}','kategori_artikel_Controller@destroy')->name('kategori_artikel.destroy');

Route::get('/kategori_berita','kategori_berita_Controller@index')->name('kategori_berita.index');
Route::get('/kategori_berita/create','kategori_berita_Controller@create')->name('kategori_berita.create');
Route::post('/kategori_berita','kategori_berita_Controller@store')->name('kategori_berita.store');
Route::get('/kategori_berita/{id}','kategori_berita_Controller@show')->name('kategori_berita.show');
Route::get('/kategori_berita/{id}','kategori_berita_Controller@edit')->name('kategori_berita.edit');
Route::patch('/kategori_berita/{id}','kategori_berita_Controller@update')->name('kategori_berita.update');
Route::delete('/kategori_berita/{id}','kategori_berita_Controller@destroy')->name('kategori_berita.destroy');


Route::get('/kategori_galeri','kategori_galeri_Controller@index')->name('kategori_galeri.index');
Route::get('/kategori_galeri/create','kategori_galeri_Controller@create')->name('kategori_galeri.create');
Route::post('/kategori_galeri','kategori_galeri_Controller@store')->name('kategori_galeri.store');
Route::get('/kategori_galeri/{id}','kategori_galeri_Controller@show')->name('kategori_galeri.show');
Route::get('/kategori_galeri/{id}','kategori_galeri_Controller@edit')->name('kategori_galeri.edit');
Route::patch('/kategori_galeri/{id}','kategori_galeri_Controller@update')->name('kategori_galeri.update');
Route::delete('/kategori_galeri/{id}','kategori_galeri_Controller@destroy')->name('kategori_galeri.destroy');

Route::get('/kategori_pengumuman','kategori_pengumuman_Controller@index')->name('kategori_pengumuman.index');
Route::get('/kategori_pengumuman/create','kategori_pengumuman_Controller@create')->name('kategori_pengumuman.create');
Route::post('/kategori_pengumuman','kategori_pengumuman_Controller@store')->name('kategori_pengumuman.store');
Route::get('/kategori_pengumuman/{id}','kategori_pengumuman_Controller@show')->name('kategori_pengumuman.show');
Route::get('/kategori_pengumuman/{id}','kategori_pengumuman_Controller@edit')->name('kategori_pengumuman.edit');
Route::patch('/kategori_pengumuman/{id}','kategori_pengumuman_Controller@update')->name('kategori_pengumuman.update');
Route::delete('/kategori_pengumuman/{id}','kategori_pengumuman_Controller@destroy')->name('kategori_pengumuman.destroy');

Route::get('/artikel/','artikel_Controller@index')->name('artikel.index');
Route::get('/artikel/create','artikel_Controller@create')->name('artikel.create');
Route::post('/artikel','artikel_Controller@store')->name('artikel.store');
Route::get('/artikel/{id}','artikel_Controller@show')->name('artikel.show');
Route::get('/artikel/{id}','artikel_Controller@edit')->name('artikel.edit');
Route::patch('/artikel/{id}','artikel_Controller@update')->name('artikel.update');
Route::delete('artikel/{id}','artikel_Controller@destroy')->name('artikel.destroy');


Route::get('/berita','berita_Controller@index')->name('berita.index');
Route::get('/berita/create','berita_Controller@create')->name('berita.create');
Route::post('/berita','berita_Controller@store')->name('berita.store');
Route::get('/berita/{id}','berita_Controller@show')->name('berita.show');
Route::get('/berita/{id}','berita_Controller@edit')->name('berita.edit');
Route::patch('/berita/{id}','berita_Controller@update')->name('berita.update');
Route::delete('/berita/{id}','berita_Controller@destroy')->name('berita.destroy');


Route::get('/galeri','galeri_Controller@index')->name('galeri.index');
Route::get('/galeri/create','galeri_Controller@create')->name('galeri.create');
Route::post('/galeri','galeri_Controller@store')->name('galeri.store');
Route::get('/galeri/{id}','galeri_Controller@show')->name('galeri.show');
Route::get('/galeri/{id}','galeri_Controller@edit')->name('galeri.edit');
Route::patch('/galeri/{id}','galeri_Controller@update')->name('galeri.update');
Route::delete('/galeri/{id}','galeri_Controller@destroy')->name('galeri.destroy');


Route::get('/pengumuman','pengumuman_Controller@index')->name('pengumuman.index');
Route::get('/pengumuman/create','pengumuman_Controller@create')->name('pengumuman.create');
Route::post('/pengumuman','pengumuman_Controller@store')->name('pengumuman.store');
Route::get('/pengumuman/{id}','pengumuman_Controller@show')->name('pengumuman.show');
Route::get('/pengumuman/{id}','pengumuman_Controller@edit')->name('pengumuman.edit');
Route::patch('/pengumuman/{id}','pengumuman_Controller@update')->name('pengumuman.update');
Route::delete('/pengumuman/{id}','pengumuman_Controller@destroy')->name('pengumuman.destroy');
