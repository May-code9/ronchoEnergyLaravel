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

Route::get('/', ['as'=>'roncho_home', 'uses'=>'RonchoController@index']);
Route::get('/Oil&Gas', ['as'=>'roncho_oil', 'uses'=>'RonchoController@oil']);
Route::get('/ICT', ['as'=>'roncho_ict', 'uses'=>'RonchoController@ict']);
Route::get('/Energy', ['as'=>'roncho_energy', 'uses'=>'RonchoController@energy']);
Route::get('/About RonchoEnergy', ['as'=>'roncho_about', 'uses'=>'RonchoController@about']);
Route::get('/Products', ['as'=>'roncho_products', 'uses'=>'RonchoController@products']);
Route::get('/Contact Roncho Energy', ['as'=>'roncho_contact', 'uses'=>'RonchoController@contact']);
Route::get('/News', ['as'=>'roncho_news', 'uses'=>'RonchoController@news']);
Route::get('/Projects', ['as'=>'roncho_projects', 'uses'=>'RonchoController@projects']);