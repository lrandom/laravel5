<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/


Route::middleware('auth:api')->get('v1/me', function () {
    return auth()->user();
});

//api/v1/users
Route::prefix('v1/users')->group(function () {
    Route::get('', [\Database\migrations\UserController::class, 'getUsers']);
    Route::get('/{id}', [\Database\migrations\UserController::class, 'getUser']);
    Route::post('', [\Database\migrations\UserController::class, 'addUser']);
    Route::delete('/{id}', [\Database\migrations\UserController::class, 'deleteUser']);
    Route::put('/{id}', [\Database\migrations\UserController::class, 'updateUser']);
});
