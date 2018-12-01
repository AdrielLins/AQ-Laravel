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

Route::group(['prefix'=>'esportes', 'where'=>['id'=>'[0-9]+']], function (){
    Route::get('', ['as'=>'esportes', 'uses'=>'EsportesController@index']);
    Route::get('create', ['as'=>'esportes.create', 'uses'=>'EsportesController@create']);
    Route::post('store', ['as'=>'esportes.store', 'uses'=>'EsportesController@store']);
    Route::get('{id}/destroy', ['as'=>'esportes.destroy', 'uses'=>'EsportesController@destroy']);
    Route::get('{id}/edit', ['as'=>'esportes.edit', 'uses'=>'EsportesController@edit']);
    Route::put('{id}/update', ['as'=>'esportes.update', 'uses'=>'EsportesController@update']);
});

Route::group(['prefix'=>'jogadores', 'where'=>['id'=>'[0-9]+']], function (){
    Route::get('', ['as'=>'jogadores', 'uses'=>'JogadoresController@index']);
    Route::get('create', ['as'=>'jogadores.create', 'uses'=>'JogadoresController@create']);
    Route::post('store', ['as'=>'jogadores.store', 'uses'=>'JogadoresController@store']);
    Route::get('{id}/destroy', ['as'=>'jogadores.destroy', 'uses'=>'JogadoresController@destroy']);
    Route::get('{id}/edit', ['as'=>'jogadores.edit', 'uses'=>'JogadoresController@edit']);
    Route::put('{id}/update', ['as'=>'jogadores.update', 'uses'=>'JogadoresController@update']);
});

Route::group(['prefix'=>'users', 'where'=>['id'=>'[0-9]+']], function (){
    Route::get('', ['as'=>'users', 'uses'=>'UsersController@index']);
    Route::get('create', ['as'=>'users.create', 'uses'=>'UsersController@create']);
    Route::post('store', ['as'=>'users.store', 'uses'=>'UsersController@store']);
    Route::get('{id}/destroy', ['as'=>'users.destroy', 'uses'=>'UsersController@destroy']);
    Route::get('{id}/edit', ['as'=>'users.edit', 'uses'=>'UsersController@edit']);
    Route::put('{id}/update', ['as'=>'users.update', 'uses'=>'UsersController@update']);
});

Route::group(['prefix'=>'agendamentos', 'where'=>['id'=>'[0-9]+']], function (){
    Route::get('', ['as'=>'agendamentos', 'uses'=>'AgendamentosController@index']);
    Route::get('create', ['as'=>'agendamentos.create', 'uses'=>'AgendamentosController@create']);
    Route::post('store', ['as'=>'agendamentos.store', 'uses'=>'AgendamentosController@store']);
    Route::get('{id}/destroy', ['as'=>'agendamentos.destroy', 'uses'=>'AgendamentosController@destroy']);
    Route::get('{id}/edit', ['as'=>'agendamentos.edit', 'uses'=>'AgendamentosController@edit']);
    Route::put('{id}/update', ['as'=>'agendamentos.update', 'uses'=>'AgendamentosController@update']);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
