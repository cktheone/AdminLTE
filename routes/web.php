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

/*Route::get('/', function () {
    return view('index');
});*/

Route::get('/', function (){
    return view('page.page1');
} );

Route::get('/data-tables', function (){
    return view('page.page2');
} );

// Route::get('/register', 'AuthController@register');

// Route::get('/welcome', 'AuthController@welcome');

// Route::post('/welcome', 'AuthController@welcome');

Route::get('/master', function () {
    return view('layout.master');
});

Route::get('/pertanyaan', 'PertanyaanController@index');
Route::get('/pertanyaan/create',' PertanyaanController@create');
Route::post('/pertanyaan', 'PertanyaanController@store');
Route::get('/jawaban/{pertanyaan_id}','JawabanController@index');
Route::post('/jawaban/{pertanyaan_id}','JawabanController@store');

Route::get('/pertanyaan/{id}', 'PertanyaanController@detail');
Route::get('/pertanyaan/{id}/edit', 'PertanyaanController@edit');
Route::put('/pertanyaan/{id}', 'PertanyaanController@update');
Route::delete('/pertanyaan/{id}', 'PertanyaanController@destroy');


