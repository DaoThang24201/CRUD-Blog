<?php

use Illuminate\Support\Facades\Route;

Route::prefix('blog')->name('blog.')->group(function () {

    Route::get('/',[\Modules\Blog\Controllers\BlogController::class,'index'])->name('index');

    Route::get('/blog-{slug}',[\Modules\Blog\Controllers\BlogController::class,'detail'])->name('detail');


    Route::get('/{tagName}',[\Modules\Blog\Controllers\BlogController::class,'tag'])->name('tag');

});
