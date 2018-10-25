<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

// Grouping Route
$router->group(['prefix' => 'admin'], function () use ($router) {
    $router->get('dashboard', 'AdminController@dashboard');

    $router->get('profile', 'AdminController@profile');

    //use alias for route name
    $router->get('users', ['as' => 'admin.users', 'uses' => 'AdminController@users']);
    
    // redirect to admin.users
    $router->get('list', 'AdminController@userList');

    //parsing params to controller
    $router->get('user/{id}', 'AdminController@userDetail');

    //option params to controller
    $router->get('post[/{id}]', 'AdminController@getPost');
});

//show url using helper route()
$router->get('show-url', ['as' => 'show-url', 'uses' => 'ExampleController@showURL']);

// Use middleware
$router->get('/admin/home', ['middleware' => 'age', function () {
    return "Old enough";
}]);

$router->get('/fail', function () {
    return "Not yet mature";
});

// Generate Key for .env
$router->get('/key', 'ExampleController@generateKey');
