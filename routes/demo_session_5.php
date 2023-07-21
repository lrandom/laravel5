<?php

use Illuminate\Support\Facades\Route;

Route::get('category-list', function () {
    $q = request()->q ?? "";
    $categories = \App\Models\Category::where('name', 'like', "%$q%")->paginate(15)->withQueryString();
    $products = \App\Models\Product::all();
    return view('category.list', compact('categories','products'));
});

Route::get('users', function () {
    $users = \App\Models\User::all();
    $userInfos = \App\Models\UserInfo::all();
    return view('user.list', compact('users','userInfos'));
});
?>
