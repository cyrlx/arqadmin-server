<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::pattern('id', '[0-9]+');

Route::get('/', function () {
    return redirect('app/');
});

Route::post('auth/login', 'AuthController@login');
Route::get('auth/logout', 'AuthController@logout');

Route::get('auth/ldap', 'AuthController@ldapTest');

Route::group(['prefix' => 'api'], function () {

    /**
     * User
     */
//    Route::get('user', 'UserController@create');

    /**
     * Documentos
     */
    Route::get('documento', 'DocumentoController@findAll');
    Route::post('documento', 'DocumentoController@add');
    Route::put('documento/{id}', 'DocumentoController@update');
    Route::delete('documento/{id}', 'DocumentoController@destroy');


    /**
     * RelatedTables
     */
    Route::get('/documento/auxtable/{modelName}', 'DocumentoController@fetchAuxiliarTable');

    /**
     * Statistics
     */
    Route::get('/documento/estatisticas', 'DocumentoController@statistic');


    /** Auxiliar Tables */

    /**
     * Acervo
     */
    Route::get('acervo', 'AcervoController@findAll');
    Route::post('acervo', 'AcervoController@add');
    Route::put('acervo/{id}', 'AcervoController@update');
    Route::delete('acervo/{id}', 'AcervoController@destroy');

    /**
     * Fundo
     */
    Route::get('fundo', 'FundoController@findAll');
    Route::post('fundo', 'FundoController@add');
    Route::put('fundo/{id}', 'FundoController@update');
    Route::delete('fundo/{id}', 'FundoController@destroy');

    /**
     * Conservacao
     */
    Route::get('conservacao', 'ConservacaoController@findAll');
    Route::post('conservacao', 'ConservacaoController@add');
    Route::put('conservacao/{id}', 'ConservacaoController@update');
    Route::delete('conservacao/{id}', 'ConservacaoController@destroy');


});

