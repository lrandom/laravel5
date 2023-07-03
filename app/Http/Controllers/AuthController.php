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

    public function doLogin(Request $request)
    {
        //validate
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:6|max:20'
        ], [
            'username.required' => 'Username không được để trống',
            'password.required' => 'Mật khẩu không được để trống',
            'password.min' => 'Mật khẩu ít nhất 6 ký tự',
            'password.max' => 'Mật khẩu không quá 20 ký tự'
        ]);

        //chay tiep xuong duoi
        //xu ly ABC
        echo 'Xu ly tiep';

    }
}
