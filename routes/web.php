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
    $router->get('dashboard', function () {
        return "Dashboard Admin";
    });

    $router->get('profile', function () {
        return "Profile Admin";
    });

    //use alias for route name
    $router->get('users', ['as' => 'admin.users', function () {
        return "Users list";
    }]);
    
    // redirect to admin.users
    $router->get('list', function () {
        return redirect()->route('admin.users');
    });
});

// Use middleware
$router->get('/admin/home', ['middleware' => 'age', function () {
    return "Old enough";
}]);

$router->get('/fail', function () {
    return "Not yet mature";
});



// Generate Key for .env
// $router->get('/key', function () {
//     return str_random(32);
// });
