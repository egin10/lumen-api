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
        //Use middleware only for some methods
        $this->middleware('age', ['only' => ['profile']]);
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

    public function userList()
    {
        return redirect()->route('admin.users');
    }

    public function userDetail($id)
    {
        return 'Page User with ID ' . $id;
    }

    public function getPost($id = null)
    {
        if ($id != null) {
            return 'Page Post with ID ' . $id;
        }
        return 'Page Post with Null ID';
    }
}
