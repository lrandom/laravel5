<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/get-category', function () {
    $categories = DB::table('categories')->select('id', 'name')->get();
    dd($categories);
    //SELECT * FROM categories WHERE id>4 OR (id<8 AND name like '%a%') AND name like '%a%'
    return view('categories.list', compact('categories'));
});

Route::get('/join-table', function () {
    $categories = DB::table('categories')->join('products', 'categories.id', '=', 'products.category_id')
        ->select('categories.id', 'categories.name', 'products.name as product_name')->get();
    dd($categories);
});


Route::get('/demo-insert-category', function () {
    DB::table('categories')->insert([
        'name' => 'Category 1',
        'parent_id' => 0
    ]);
});

//fixed parameter
Route::get('/delete-category/{id}/{name}', function ($id, $name) {
    //optional parameter
    //$id = request('id') ?? 0;
    DB::table('categories')->where('id', '=', $id)->delete();
});

Route::get('update-category/{id}', function ($id) {
    DB::table('categories')->where('id', '=', $id)->update([
        'name' => "Category $id updated"
    ]);
});
//UPDATE categories SET name = 'Category 1 updated' WHERE id = 1
?>
