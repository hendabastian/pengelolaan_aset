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
    return view('index');
});

// pemeliharaan
Route::get('pemeliharaan','pemeliharaanController@index');
// input pekerjaan
Route::get('pemeliharaan/input-pekerjaan','input_pekerjaanController@index');
