<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    //
    public function getUsers()
    {
        return response()->json([
            'success' => true,
            'message' => 'Lấy danh sách thành công',
            'data' => User::all(),
        ], 200);
    }

    public function login()
    {
        // dd(request()->all());
        if (User::where('email', request('email'))->exists()) {
            $user = User::where('email', request('email'))->first();
            if (Hash::check(request('password'), $user->password)) {
                $token = $user->createToken('admin')->accessToken;
                return response()->json([
                    'success' => true,
                    'message' => 'Đăng nhập thành công',
                    'data' => $user,
                    'token' => $token,
                ], 200);
            }else{
                return response()->json([
                    'success' => false,
                    'message' => 'Đăng nhập thất bại',
                    'data' => '',
                ], 401);
            }
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Đăng nhập thất bại',
                'data' => '',
            ], 401);
        }
    }

}
