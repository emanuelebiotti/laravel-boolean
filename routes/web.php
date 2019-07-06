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

Route::get('homepage', 'StaticController@homepage');
Route::get('welcome', 'Controller@welcome');
Route::get('privacy-policy', 'StaticController@privacypolicy');
