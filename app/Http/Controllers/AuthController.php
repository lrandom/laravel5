<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function login()
    {
        return view('auth.login');
    }

    public function doLogin()
    {
        dd(\request()->all());
    }
}
