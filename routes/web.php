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
Route::any('/','QuestoesController@view');

Route::get('/questoes/list','QuestoesController@list');

Route::any('/questoes/add','QuestoesController@add');

Route::any('/questoes/add/vinculo','QuestoesController@addVinculo');

Route::get('/orgaos/view','OrgaosController@view');

Route::any('/orgaos/add','OrgaosController@add');

Route::get('/bancas/view','BancasController@view');

Route::any('/bancas/add','BancasController@add');

Route::get('/assuntos/view','AssuntosController@view');

Route::any('/assuntos/add','AssuntosController@add');
