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


Route::get('/company', 'CompanyController@show');
Route::get('/company/{id}', 'CompanyController@show');

//服务动态Fwdt->咨询中心 zxzx
Route::get('/zxzx', 'ZxzxController@index');
Route::get('/zxzx/{id}', 'ZxzxController@show');

//劳务派遣Lwpq->服务项目 fwxm
Route::get('/fwxm', 'FwxmController@index');
Route::get('/fwxm/{id}', 'FwxmController@show');

//人力资源 rlzy->经典案例 jdal
Route::get('/jdal', 'JdalController@index');
Route::get('/jdal/{id}', 'JdalController@show');

//劳务外包 lwwb->企业资质 qyzz
Route::get('/qyzz', 'QyzzController@index');

//政策法规 zcfg->党群建设 dqjs
Route::get('/dqjs', 'DqjsController@index');
Route::get('/dqjs/{id}', 'DqjsController@show');

//gzjs -> 企业招聘 qyzp
Route::get('/qyzp', 'QyzpController@index');
Route::get('/qyzp/{id}', 'QyzpController@show');


Route::get('/about', 'CompanyController@about');


Route::get('/zpxx', 'ZpxxController@index');
Route::get('/zpxx/{id}', 'ZpxxController@show');



Route::get('/zlxz', 'ZlxzController@index');
Route::get('/download/{filename}', 'ZlxzController@download');
Route::get('/insight/{filename}', 'ZlxzController@insight');

Route::get('/contact', 'ContactController@index');
