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

//Acessando o perfil de um usuário
Route::get('/perfil/{id}','UserController@show')->name('pesquisador');

// Editar Perfil do usuário
Route::get('/perfil','UserController@perfil')->name('perfil');
Route::post('/perfil','UserController@update_avatar')->name('perfil');


Route::get('/pesquisadores', 'UserController@index')->name('pesquisadores');


// Roda do Dashboad do projeto
//Route::get('/projeto/{id}', 'ProjetoController@show');
Route::get('/projeto/{id}/create', 'ProjetoController@create')->name('create_projeto');
Route::post('/projeto/create', 'ProjetoController@store')->name('create_projeto');


// Roda dos grupos CRUD
Route::get('/grupos', 'GrupoController@index')->name('grupos');
Route::get('/grupos/create', 'GrupoController@create')->name('create_grupo');
Route::post('/grupos/create', 'GrupoController@store')->name('create_grupo');

Route::get('/espelho/{id}', 'GrupoController@show');

// Rota para Notícias
Route::get('/noticias', function () {
    
    return view('news.noticias');

});


