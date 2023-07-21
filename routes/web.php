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
    Route::get('/user/{id}/{name}', function ($id, $name) {
        echo 'user id is' . $id;
        echo 'username is' . $name;
    });

    Route::get('/category', function () {
        echo 'Admin Page';
    })->name('admin.category');
});

Route::get('/about', function () {
    echo "Hello, it is about page";
});


Route::get('/demo-view', function () {
    /*return view('sub.demo',[
        'username'=>'Luan',
        'address'=>'QN'
    ]);*/

    /*return view('sub.demo')->with('username', 'Luan')->with('address', 'QN');*/
    $username = 'Luan';
    $address = 'QN';
    $notificationError = 'Có lỗi xảy ra';
    return view('sub.demo', compact('username', 'address'));
});


Route::get('/demo-view-2', function () {
    $collection = [
        'Luan',
        'Quang Nam',
        'Hue',
        'Da Nang'
    ];
    return view('sub.demo-2', compact('collection'));

});


Route::get('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::post('/do-login', [App\Http\Controllers\AuthController::class, 'doLogin'])->name('do-login');


Route::get('/home', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});


//require_once __DIR__ . '/demo_session_3.php';
//require_once __DIR__ . '/demo_session_4.php';
require_once __DIR__ . '/demo_session_5.php';
