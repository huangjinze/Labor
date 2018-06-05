<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->resource('/lwpq', 'LwpqController');
    $router->resource('/rlzy', 'RlzyController');
    $router->resource('/lwwb', 'LwwbController');
    $router->resource('/zcfg', 'ZcfgController');
    $router->resource('/gzjs', 'GzjsController');
    $router->resource('/zpxx', 'ZpxxController');
    $router->resource('/fwdt', 'FwdtController');
    $router->resource('/about', 'CompanyController');

});




