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
Route::post('kelas/tambah/','KelasController@create');
Route::put('kelas/update/{id}', 'KelasController@update');
Route::delete('kelas/delete/{id}', 'KelasController@delete');

Route::get('guru','GuruController@index');
Route::get('guru/{id}','GuruController@getId');
Route::post('guru','GuruController@create');
Route::put('guru/update/{id}', 'GuruController@update');
Route::delete('guru/{id}', 'GuruController@delete');

Route::get('mapel','MapelController@index');
Route::get('mapel/{id}','MapelController@getId');
Route::post('mapel','MapelController@create');
Route::put('mapel/update/{id}', 'MapelController@update');
Route::delete('mapel/{id}', 'MapelController@delete');

Route::get('siswa','SiswaController@index');
Route::get('siswa/{id}','SiswaController@getId');
Route::post('siswa','SiswaController@create');
Route::put('siswa/update/{id}', 'SiswaController@update');
Route::delete('siswa/{id}', 'SiswaController@delete');

Route::get('login','LoginController@index');
Route::get('login/siswa','LoginController@getSiswa');
Route::get('login/guru','LoginController@getGuru');
Route::get('login/siswa/{id}','LoginController@getIdSiswa');
Route::get('login/guru/{id}','LoginController@getIdGuru');
Route::post('login/guru','LoginController@createGuru');
Route::post('login/siswa','LoginController@createSiswa');
Route::put('login/update/{id}', 'LoginController@update');
Route::delete('login/{id}', 'LoginController@delete');

Route::get('pertanyaan','PertanyaanController@index');
Route::get('pertanyaan/{id}','PertanyaanController@getId');
Route::post('pertanyaan','PertanyaanController@create');
Route::put('pertanyaan/update/{id}', 'PertanyaanController@update');
Route::delete('pertanyaan/{id}', 'PertanyaanController@delete');

Route::get('komentar','KomentarController@index');
Route::get('komentar/{id}','KomentarController@getId');
Route::post('komentar','KomentarController@create');
Route::put('komentar/update/{id}', 'KomentarController@update');
Route::delete('komentar/{id}', 'KomentarController@delete');