<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->resource('users', UsersController::class);
    $router->resource('categories', CategoriesController::class);
    $router->resource('articles', ArticlesController::class);

    // 发布微信群发
    $router->put('articles/{article}/publishWechat', 'ArticlesController@publish');

    $router->post('files/editor', 'FilesController@editor');
    $router->resource('messages', MessagesController::class);

//    $router->get('wechat/menus', 'WechatController@menus');
    $router->get('wechat/menus/publish', 'Wechat\MenusController@publish');
    $router->resource('wechat/menus', Wechat\MenusController::class);
    $router->resource('wechat/articles', Wechat\ArticlesController::class);
});
