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
Auth::routes();
Route::get('/home','HomeController@index')->name('home')->middleware('auth');
Route::get('/','HomeController@index')->middleware('auth');

Route::resource('produto','ProdutoController');
//Route::get('/cadastro','CadastroController@index');
//Route::get('/consulta','ConsultaController@index');
//Route::get('/excluir','ExcluirController@index');


