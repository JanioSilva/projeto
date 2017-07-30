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

Auth::routes();

//Home após o login 
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/pesquisadores', 'UserController@index')->name('pesquisadores');



Route::get('/projeto', function () {
    return view('projeto.dashboard');
});



Route::get('/grupos', 'GrupoController@index')->name('grupos');
Route::get('/grupos/create', 'GrupoController@create')->name('create_grupo');
Route::post('/grupos/create', 'GrupoController@store')->name('create_grupo');

Route::get('/espelho/{id}', 'GrupoController@show');

