<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('kelas','KelasController@index');
Route::get('kelas/{id}','KelasController@getId');
Route::post('kelas','KelasController@create');
Route::put('kelas/update/{id}', 'KelasController@update');
Route::delete('kelas/{id}', 'KelasController@delete');

Route::get('guru','GuruController@index');
Route::get('guru/{id}','GuruController@getId');
Route::post('guru','GuruController@create');
Route::put('guru/update/{id}', 'GuruController@update');
Route::delete('guru/{id}', 'GuruController@delete');
