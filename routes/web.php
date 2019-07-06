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

Route::get('prima-rotta', 'StaticController@prima');
Route::get('seconda-rotta', 'StaticController@seconda');

Route::get('homepage', 'StaticController@homepage')->name('homepage');
Route::get('welcome', 'Controller@welcome');
Route::get('privacy-policy', 'StaticController@privacyPolicy')->name('privacy');
Route::get('corso', 'StaticController@corso')->name('corso');
Route::get('metodo', 'StaticController@metodo')->name('metodo');
Route::get('dopo-il-corso', 'StaticController@dopoilcorso')->name('dopoilcorso');
Route::get('lezione-gratuita', 'StaticController@lezionegratuita')->name('lezionegratuita');
Route::get('iscriviti', 'StaticController@iscriviti')->name('iscriviti');
Route::get('faq', 'StaticController@domandeFrequenti')->name('domandefrequenti');
Route::get('jobs', 'StaticController@lavoraConNoi')->name('lavoraconnoi');
