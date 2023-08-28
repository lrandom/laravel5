<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;

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


}
