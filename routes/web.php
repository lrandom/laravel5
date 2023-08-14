<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

require_once __DIR__ . '/admin.php';

Route::get('/chrome', function () {
    echo "Chrome Only content";
})->middleware([\App\Http\Middleware\CheckIsDesktopMiddleware::class]);

Route::get("/chrome-2", function () {
    echo "Chrome Only content";
})->middleware([\App\Http\Middleware\CheckIsDesktopMiddleware::class]);

Route::get("/warning-browser", function () {
    echo "Ban chi co the truy cap bang trinh duyet Chrome";
})->name("mobile.warning");
