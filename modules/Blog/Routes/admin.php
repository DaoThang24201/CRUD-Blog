<?php


use Illuminate\Support\Facades\Route;

Route::name('admin.blog.')->group(function () {

    Route::get('/', [\Modules\Blog\Admin\BlogController::class, 'index'])->name('index');

    Route::get('/create', [\Modules\Blog\Admin\BlogController::class, 'create'])->name('create');
    Route::post('/store/{id?}', [\Modules\Blog\Admin\BlogController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [\Modules\Blog\Admin\BlogController::class, 'edit'])->name('edit');
    Route::post('/get_tag', [\Modules\Blog\Admin\BlogController::class, 'get_tag'])->name('get_tag');
    Route::post('/action', [\Modules\Blog\Admin\BlogController::class, 'action'])->name('action');


    Route::prefix('tag')->group(function () {
        Route::get('/', [\Modules\Blog\Admin\BlogTagController::class, 'tag'])->name('tag');
        Route::post('/store', [\Modules\Blog\Admin\BlogTagController::class, 'tag_store'])->name('tag_store');
        Route::get('/edit/{id}', [\Modules\Blog\Admin\BlogTagController::class, 'tag_edit'])->name('tag_edit');
        Route::post('/edit/{id}', [\Modules\Blog\Admin\BlogTagController::class, 'tag_edit_post'])->name('tag_edit_post');
        Route::post('/delete', [\Modules\Blog\Admin\BlogTagController::class, 'tag_delete'])->name('tag_delete');
    });

    Route::prefix('category')->group(function () {
        Route::get('/', [\Modules\Blog\Admin\BlogCategoryController::class, 'category'])->name('category');
        Route::post('/store', [\Modules\Blog\Admin\BlogCategoryController::class, 'category_store'])->name('category_store');
        Route::get('/edit/{id}', [\Modules\Blog\Admin\BlogCategoryController::class, 'category_edit'])->name('category_edit');
        Route::post('/edit/{id}', [\Modules\Blog\Admin\BlogCategoryController::class, 'category_edit_post'])->name('category_edit_post');
        Route::post('/delete', [\Modules\Blog\Admin\BlogCategoryController::class, 'category_delete'])->name('category_delete');
    });




   /* Route::get('/edit/{id}', [\Modules\Blog\Admin\BlogController::class, 'edit'])->name('edit');
    Route::delete('/delete/{id}', [\Modules\Blog\Admin\BlogController::class, 'delete'])->name('delete');


    Route::post('/store/{id?}', [\Modules\Blog\Admin\BlogController::class, 'store'])->name('store');*/
});
