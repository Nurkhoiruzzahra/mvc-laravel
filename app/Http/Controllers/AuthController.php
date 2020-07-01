<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $username = $request->name;
        $lname = $request->lname;
        return view('users.welcome', compact('username','lname'));
    }

}