<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/get-category', function () {
    $categories = DB::table('categories')->select('id','name')->get();
    dd($categories);
    //SELECT * FROM categories WHERE id>4 OR (id<8 AND name like '%a%') AND name like '%a%'
    return view('categories.list', compact('categories'));
});

Route::get('/join-table', function () {
    $categories = DB::table('categories')->join('products', 'categories.id', '=', 'products.category_id')
        ->select('categories.id', 'categories.name', 'products.name as product_name')->get();
    dd($categories);
});
?>
