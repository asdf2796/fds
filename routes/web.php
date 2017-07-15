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

Route::get('/', 'PagesController@getIndex');

Route::get('/compare', 'PagesController@getCompare');

Route::post('/compare/process', 'ComparisonController@postCompare');

Route::get('/config', 'ParametersController@getIndex');

Route::post('/config/submit', 'ParametersController@postUpdate');
