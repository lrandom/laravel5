<?php

use Illuminate\Support\Facades\Route;
use App\Models\Category;

Route::get('/category', function () {
    $categories = Category::onlyTrashed()->get();
    foreach ($categories as $category) {
        echo $category->id;
    }
});

Route::get('/categoryById', function () {
    //$category = Category::find(31);
    $category = Category::where('name', 'Áo nam 19')->first();
    dd($category->name);
});

Route::get('insert-category', function () {
    /* $category = new Category();
     $category->name = 'Áo nam 19';
     $category->parent_id = 0;
     $category->save();*/

    Category::create([
        'name' => 'Áo nam 20',
        'parent_id' => 0
    ]);
});

Route::get('add-category-form', function () {
    return view('category.add');
});

Route::post('handle-category-form', function () {
    Category::create(request()->all());
})->name('category.handle.add');

Route::get('delete-category', function () {
    Category::where('id', '>', 10)->delete();
});

Route::get('revert-delete-category', function () {
    Category::where('id', '>', 10)->restore();
});

?>
