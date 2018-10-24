<?php

namespace App\Http\Controllers;

class AdminController extends Controller
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

    //Dashboard page
    public function dashboard()
    {
        return "Dashboard Admin";
    }

    public function profile()
    {
        return "Profile Admin";
    }

    public function users()
    {
        return "Users list";
    }

    public function list()
    {
        return redirect()->route('admin.users');
    }
}
