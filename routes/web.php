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
Route::get('/Engineering Services', ['as'=>'roncho_engineering', 'uses'=>'RonchoController@engineering']);
Route::get('/ICT', ['as'=>'roncho_ict', 'uses'=>'RonchoController@ict']);
Route::get('/Energy', ['as'=>'roncho_energy', 'uses'=>'RonchoController@energy']);
Route::get('/About RonchoEnergy', ['as'=>'roncho_about', 'uses'=>'RonchoController@about']);
Route::get('/Products', ['as'=>'roncho_products', 'uses'=>'RonchoController@products']);
Route::get('/SingleProducts/{id}', ['as'=>'roncho_iproducts', 'uses'=>'RonchoController@iproducts'])->middleware('authuser');
Route::post('/submitProduct/{id}', ['as'=>'submitProduct', 'uses'=>'MessageController@submitProduct']);
Route::get('/Contact Us', ['as'=>'roncho_contact', 'uses'=>'RonchoController@contact']);
Route::get('/News', ['as'=>'roncho_news', 'uses'=>'RonchoController@news']);
Route::get('/Projects', ['as'=>'roncho_projects', 'uses'=>'RonchoController@projects']);

//SearchController
Route::get('searchProducts{page?}', ['as'=>'product.search', 'uses'=>'SearchController@productSearch']);
Route::get('searchNews{page?}', ['as'=>'news.search', 'uses'=>'SearchController@newsSearch']);

Auth::routes();

Route::group(['middleware'=>'admin'], function () {
  Route::get('/dashboard', ['as'=>'ronchoDashboard', 'uses'=>'DashboardController@index']);
  Route::resource('energy', 'EnergyProject');
  Route::resource('ict', 'IctProject');
  Route::resource('engineering', 'EngineeringProject');
  Route::resource('product', 'ProductController');
  Route::resource('news', 'AddNewsController');
  Route::resource('message', 'AdminMessage');
  Route::resource('readmessage', 'AdminReadMessage');
});
Route::resource('adminuser', 'UserAdminController')->middleware('superadmin');
