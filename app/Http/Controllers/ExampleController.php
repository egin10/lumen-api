<?php

namespace App\Http\Controllers;

use \Illuminate\Http\Request;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //Generate Key
    public function generateKey () 
    {
        return str_random(32);
    }

    //Show URL using helper route()
    public function showURL ()
    {
        // return 'URL of admin.users: ' . route('admin.users');
        echo '<a href="'. route('admin.users') .'">Redirect to Admin Users</a>';
    }

    //Add Request Handler
    public function showPath (Request $request)
    {
        // return current path
        return $request->path();
    }

    //Show Method used in route
    public function showMethod (Request $request) 
    {
        // return method used on route
        return $request->method();
    }

    //Catch Request Body
    public function addUser (Request $request)
    {
        $result = [
            'username' => $request->username,
            'password' => $request->password
        ];

        return 'Username is ' . $result['username'] . ' and Password is ' . $result['password'];
        
        // get all request
        // return $request->all();

        // default value
        // return $request->input('username', 'default')

        // check filled body parse
        if ($request->filled(['username', 'password']))
        {
            return 'Success';
        } else {
            return 'Fail';
        };
    }

}
