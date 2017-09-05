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
    return view('start');
});

Route::get('dropzone', 'HomeController@dropzone');
Route::post('dropzone/store', ['as' => 'dropzone.store', 'uses' => 'HomeController@dropzoneStore']);