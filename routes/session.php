<?php

use Illuminate\Support\Facades\Route;

Route::get('/set-session', function () {
    session()->put("name", "John Doe");
    session(["age" => 20]);
    echo "set session";
});

Route::get('/get-session', function () {
    echo session('name');
    echo session('age');
});

Route::get('/change-session', function () {
    session(["age" => 30]);
    echo "change session";
});

Route::get('/remove-session', function () {
    if (session()->has("name")) {
        session()->forget('name');
        session()->forget('age');
    }
    echo "remove session";
});

Route::get('/flash-session', function () {
    return redirect()->route("show-flash-session")->with("success", "This is a flash message");
});

Route::get('/show-flash-session', function () {
    return view("flash-session");
})->name("show-flash-session");
