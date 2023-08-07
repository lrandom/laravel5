<?php

use Illuminate\Support\Facades\Route;

Route::get('layout', function () {
    return view('admin.layout');
});

Route::prefix('admin')->group(function () {
    Route::prefix('category')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin.category.index');
        Route::get('/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin.category.create');
        Route::post('/create', [\App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('admin.category.store');
        Route::get('/{id}/edit', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin.category.edit');
        Route::post('/{id}/update', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin.category.update');
    });
});
?>
