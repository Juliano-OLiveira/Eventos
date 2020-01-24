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
    return view('admin.app');
});




Route::prefix('admin')->group(function(){
    Route::get('/' ,'HomeController@index');
    Route::get('/eventos/listar', 'EventoController@index')->name('evento-listar');
    Route::get('/cadastrar/novo','EventoController@create')->name('evento-novo');;
   // Route::post('/enviar','EventoController@enviar');
    Route::post('/enviar','EventoController@store')->name('evento-salvar');
    Route::get('/editar/{id}','EventoController@edit')->name('evento-editar');
    Route::post('/atualizar','EventoController@update')->name('evento-atualizar');
    Route::get('/deletar/{id}','EventoController@destroy')->name('evento-deletar');

});



