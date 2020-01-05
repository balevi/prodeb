<?php
use App\User;

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


Auth::routes(['verify' => true]);
Route::get('/home','HomeController@index')->name('home')->middleware('auth','verified');
Route::get('/','HomeController@index')->middleware('auth');

Route::resource('produto','ProdutoController');
Route::get('produto.confirm/{id}','Confirmproduto@confirm')->name('produto.confirm');

//Route::get('/consulta','ConsultaController@index');
//Route::get('/excluir','ExcluirController@index');

Auth::routes();

Route::post('/home', 'HomeController@index')->name('home');
