<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {
    $router->get('/', 'HomeController@index');
    $router->get('/fwxmArray', 'HomeController@fwxmArray');

    $router->resource('/fwxm', 'FwxmController');
    $router->resource('/jdal', 'JdalController');
    $router->resource('/qyzz', 'QyzzController');
    $router->resource('/dqjs', 'DqjsController');
    $router->resource('/qyzp', 'QyzpController');
//    $router->resource('/zpxx', 'ZpxxController');
    $router->resource('/zxzx', 'ZxzxController');
    $router->resource('/about', 'CompanyController');

});




