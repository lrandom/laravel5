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

Route::get('/', function () {
    return view('welcome');
});


/*Route::get('/admin/user', function () {

});

Route::get('/admin/category', function () {

});*/

Route::prefix('admin')->group(function () {
    Route::get('/user/{id}/{name}', function ($id,$name) {
        echo 'user id is' . $id;
        echo 'username is' . $name;
    });

    Route::get('/category', function () {
        echo 'Admi Page';
    })->name('admin.category');
});

Route::get('/about', function () {
    echo "Hello, it is about page";
});


