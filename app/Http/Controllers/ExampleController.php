<?php

namespace App\Http\Controllers;

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
}
