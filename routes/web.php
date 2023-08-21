<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/my-profile', function () {
    $authUser = \Illuminate\Support\Facades\Auth::user();
    return view('user.my-profile', compact('authUser'));
})->middleware(['auth'])->name('my-profile');


Route::get('/my-login', function () {
    return view('my-login');
})->name('my-login');

Route::post('/do-login', function () {
    if (\Illuminate\Support\Facades\Auth::attempt([
        'email' => request('email'),
        'password' => request('password')])) {
        return redirect()->route('my-profile');
    } else {
        return redirect()->back()->with('error', 'Invalid login details');
    }
})->name('do-login');

Route::post('my-logout', function () {
    \Illuminate\Support\Facades\Auth::logout();
    return redirect()->route('my-login');
})->name('my-logout');

require __DIR__ . '/auth.php';

require __DIR__ . '/session.php';


Route::get("/send-mail", function () {
    \Illuminate\Support\Facades\Mail::to("mmochicken92@gmail.com")
        ->send(new \App\Mail\OrderMail("0001"));
});

Route::get('/preview-mail', function () {
    return new \App\Mail\OrderMail("0002");
});
