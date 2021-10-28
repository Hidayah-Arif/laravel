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

Route::get('/data-toko','\App\Http\Controllers\TokoController@index')->name('data-toko');
Route::get('/create-data','\App\Http\Controllers\TokoController@RedirectCreate')->name('create-data');
Route::post('/create-data','\App\Http\Controllers\TokoController@create')->name('create-data');
Route::get('/edit-data','\App\Http\Controllers\TokoController@edit')->name('edit-data');
Route::get('/edit-data/{id}','\App\Http\Controllers\TokoController@editForm');
Route::post('/update-data/{id}','\App\Http\Controllers\TokoController@update');
Route::get('/delete-data','\App\Http\Controllers\TokoController@RedirectDelete')->name('delete-data');
Route::get('/delete-data/{id}','\App\Http\Controllers\TokoController@delete');