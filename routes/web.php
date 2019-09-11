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
Route::post('/send/registration','PendaftaranKaryawanController@create');

Route::get('/pendaftaran-karyawan','PendaftaranKaryawanController@index');


Route::group(['middleware' => ['auth','checkRole:manager']], function(){

Route::post('/list-pendaftar/acc','PendaftaranKaryawanController@accregistrant');

Route::get('/list-pendaftar','PendaftaranKaryawanController@registrantList');


});

Route::group(['middleware' => ['auth','checkRole:manager,karyawan']],function(){
	
	Route::resource('/data-karyawan','KaryawanController');
});



//Auth

Route::get('');


//Activation

Route::get('/aktivasi-akun','AktivasiController@index');

Route::post('/send/activation','AktivasiController@postActivate');

//login

Route::get('/login','AuthController@index');

Route::post('/postlogin','AuthController@postlogin');

Route::get('/logout','AuthController@logout');



