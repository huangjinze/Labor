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
Route::get('/', 'CompanyController@home');
Route::get('/test', function(){
    return 'yey2dd';
});

Route::get('/company', 'CompanyController@index');
Route::get('/company/{id}', 'CompanyController@show');

Route::get('/lwpq', 'LwpqController@index');
Route::get('/lwpq/{id}', 'LwpqController@show');

Route::get('/rlzy', 'RlzyController@index');
Route::get('/rlzy/{id}', 'RlzyController@show');

Route::get('/lwwb', 'LwwbController@index');
Route::get('/lwwb/{id}', 'LwwbController@show');

Route::get('/zcfg', 'ZcfgController@index');
Route::get('/zcfg/{id}', 'ZcfgController@show');

Route::get('/gzjs', 'GzjsController@index');
Route::get('/gzjs/{id}', 'GzjsController@show');

Route::get('/zpxx', 'ZpxxController@index');
Route::get('/zpxx/{id}', 'ZpxxController@show');

Route::get('/fwdt', 'FwdtController@index');
Route::get('/fwdt/{id}', 'FwdtController@show');

Route::get('/zlxz', 'ZlxzController@index');
Route::get('/download/{filename}', 'ZlxzController@download');
Route::get('/insight/{filename}', 'ZlxzController@insight');

Route::get('/contact', 'ContactController@index');
