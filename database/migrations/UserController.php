<?php

namespace Database\migrations;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Mockery\Exception;

class UserController extends Controller
{
    //
    public function getUsers()
    {
        try {
            return response()->json([
                'data' => User::all()
            ], 200);
        } catch (\Exception $exception) {
            return response()->json([
                'message' => $exception->getMessage(),
                'data' => []
            ], 500);
        }
    }

    public function getUser($id)
    {
        try {
            $user = User::find($id);
            return response()->json($user, 200);
        } catch (Exception $exception) {
            return response()->json([
                'message' => $exception->getMessage(),
            ], 500);
        }
    }

    public function addUser()
    {
        try {
            $name = request('name');
            $email = request('email');
            $password = request('password');
            $user = new User();
            $user->name = $name;
            $user->email = $email;
            $user->password = Hash::make($password);
            $user->save();
            return response()->json([
                'message' => 'User created successfully',
                'data' => $user
            ], 200);
        } catch (Exception $exception) {
            return response()->json(
                ['message' => $exception->getMessage()]
                , 500);
        }
    }

    public function deleteUser($id)
    {
        try {
            $user = User::find($id);
            $user->delete();
            return response()->json([
                'message' => 'User deleted successfully',
                'data' => $user
            ], 200);
        }catch (Exception $exception) {
            return response()->json(
                ['message' => $exception->getMessage()]
                , 500);
        }
    }

    public function updateUser($id)
    {
        try {
            $user = User::find($id);
            $user->name = request('name');
            $user->email = request('email');
            $user->save();
            return response()->json([
                'message' => 'User updated successfully',
                'data' => $user
            ], 200);
        }catch (Exception $exception) {
            return response()->json(
                ['message' => $exception->getMessage()]
                , 500);
        }
    }
}
