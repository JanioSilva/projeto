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
// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', function () {
    return view('home');
});

Route::get('/grupos', function () {
    return view('grupo.grupos');
})->name('grupos');

Route::get('/espelho', function () {
    return view('grupo.espelho');
});