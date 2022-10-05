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

Route::get('/kontak', function () {
    return view('backend.kontak');
});

Route::get('/masuk', function () {
    return view('auth.masuk');
});

Route::get('/home', function () {
    return view('backend.home');
});

Route::get('/index', function () {
    return view('backend.index');
});

route::get('/','ControllerKelas1a@fkelas1a');
route::get('/fkelas1a','ControllerKelas1a@fkelas1a');
route::get('/carifkelas1a','ControllerKelas1a@carifkelas1a');
route::get('/kelas1a','ControllerKelas1a@index')->middleware('auth');
route::get('/tambah_kelas1a','ControllerKelas1a@create')->middleware('auth');
route::post('/prosestambahkelas1a','ControllerKelas1a@store')->middleware('auth');
route::delete('/kelas1a/{kelas1a}','ControllerKelas1a@destroy')->middleware('auth');
route::get('/edit_kelas1a/{kelas1a}','ControllerKelas1a@edit')->middleware('auth');
route::patch('/editkelas1a/{kelas1a}','ControllerKelas1a@update')->middleware('auth');
route::get('/lihat_kelas1a/{kelas1a}','ControllerKelas1a@show')->middleware('auth');
route::get('/kelas1b','ControllerKelas1b@index')->middleware('auth');
route::get('/fkelas1b','ControllerKelas1b@fkelas1b');
route::get('/carifkelas1b','ControllerKelas1b@carifkelas1b');
route::get('/tambah_kelas1b','ControllerKelas1b@create')->middleware('auth');
route::post('/prosestambahkelas1b','ControllerKelas1b@store')->middleware('auth');
route::delete('/kelas1b/{kelas1b}','ControllerKelas1b@destroy')->middleware('auth');
route::get('/edit_kelas1b/{kelas1b}','ControllerKelas1b@edit')->middleware('auth');
route::patch('/editkelas1b/{kelas1b}','ControllerKelas1b@update')->middleware('auth');
route::get('/lihat_kelas1b/{kelas1b}','ControllerKelas1b@show')->middleware('auth');
route::get('/kelas1c','ControllerKelas1c@index')->middleware('auth');
route::get('/fkelas1c','ControllerKelas1c@fkelas1c');
route::get('/carifkelas1c','ControllerKelas1c@carifkelas1c');
route::get('/tambah_kelas1c','ControllerKelas1c@create')->middleware('auth');
route::post('/prosestambahkelas1c','ControllerKelas1c@store')->middleware('auth');
route::delete('/kelas1c/{kelas1c}','ControllerKelas1c@destroy')->middleware('auth');
route::get('/edit_kelas1c/{kelas1c}','ControllerKelas1c@edit')->middleware('auth');
route::patch('/editkelas1c/{kelas1c}','ControllerKelas1c@update')->middleware('auth');
route::get('/lihat_kelas1c/{kelas1c}','ControllerKelas1c@show')->middleware('auth');
route::get('/kelas2a','ControllerKelas2a@index')->middleware('auth')->middleware('auth');
route::get('/fkelas2a','ControllerKelas2a@fkelas2a');
route::get('/carifkelas2a','ControllerKelas2a@carifkelas2a');
route::get('/tambah_kelas2a','ControllerKelas2a@create')->middleware('auth')->middleware('auth');
route::post('/prosestambahkelas2a','ControllerKelas2a@store')->middleware('auth')->middleware('auth');
route::delete('/kelas2a/{kelas2a}','ControllerKelas2a@destroy')->middleware('auth')->middleware('auth');
route::get('/edit_kelas2a/{kelas2a}','ControllerKelas2a@edit')->middleware('auth')->middleware('auth');
route::patch('/editkelas2a/{kelas2a}','ControllerKelas2a@update')->middleware('auth')->middleware('auth');
route::get('/lihat_kelas2a/{kelas2a}','ControllerKelas2a@show')->middleware('auth')->middleware('auth');
route::get('/kelas2b','ControllerKelas2b@index')->middleware('auth')->middleware('auth');
route::get('/fkelas2b','ControllerKelas2b@fkelas2b');
route::get('/carifkelas2b','ControllerKelas2b@carifkelas2b');
route::get('/tambah_kelas2b','ControllerKelas2b@create')->middleware('auth')->middleware('auth');
route::post('/prosestambahkelas2b','ControllerKelas2b@store')->middleware('auth')->middleware('auth');
route::delete('/kelas2b/{kelas2b}','ControllerKelas2b@destroy')->middleware('auth')->middleware('auth');
route::get('/edit_kelas2b/{kelas2b}','ControllerKelas2b@edit')->middleware('auth')->middleware('auth');
route::patch('/editkelas2b/{kelas2b}','ControllerKelas2b@update')->middleware('auth')->middleware('auth');
route::get('/lihat_kelas2b/{kelas2b}','ControllerKelas2b@show')->middleware('auth');
route::get('/kelas2c','ControllerKelas2c@index')->middleware('auth');
route::get('/fkelas2c','ControllerKelas2c@fkelas2c');
route::get('/carifkelas2c','ControllerKelas2c@carifkelas2c');
route::get('/tambah_kelas2c','ControllerKelas2c@create')->middleware('auth');
route::post('/prosestambahkelas2c','ControllerKelas2c@store')->middleware('auth');
route::delete('/kelas2c/{kelas2c}','ControllerKelas2c@destroy')->middleware('auth');
route::get('/edit_kelas2c/{kelas2c}','ControllerKelas2c@edit')->middleware('auth');
route::patch('/editkelas2c/{kelas2c}','ControllerKelas2c@update')->middleware('auth');
route::get('/lihat_kelas2c/{kelas2c}','ControllerKelas2c@show')->middleware('auth');
route::get('/users','ControllerUsers@index')->middleware('auth');
route::delete('/users/{users}','ControllerUsers@destroy')->middleware('auth');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
