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

Route::get('/', 'Home\HomeController@index');

Route::get('/home', 'Home\HomeController@index');


Route::get('/orcamentos', 'Atendimento\OrcamentoController@index');
Route::get('/orcamentos/painel', 'Atendimento\OrcamentoController@dashboard');
Route::get('/orcamento/criar', 'Atendimento\OrcamentoController@create');
Route::post('/orcamento', 'Atendimento\OrcamentoController@store');
Route::get('/orcamento/detalhes/{id}', 'Atendimento\OrcamentoController@show');
Route::get('/orcamento/editar/{id}','Atendimento\OrcamentoController@edit');
Route::post('/orcamento/{id}','Atendimento\OrcamentoController@update');
Route::get('/orcamento/apagar/{id}','Atendimento\OrcamentoController@destroy');