<?php


use Illuminate\Support\Facades\Route;

Route::name('admin.hotel.')->group(function () {

    Route::get('/', [\Modules\Hotel\Admin\HotelController::class, 'index'])->name('index');

    Route::get('/create', [\Modules\Hotel\Admin\HotelController::class, 'create'])->name('create');

    Route::get('/recovery', [\Modules\Hotel\Admin\HotelController::class, 'recovery'])->name('recovery');

    Route::get('/attribute', [\Modules\Hotel\Admin\HotelController::class, 'attribute'])->name('attribute');

    Route::get('/room/attribute', [\Modules\Hotel\Admin\HotelController::class, 'room'])->name('room');

    Route::get('/room/attribute/edit/{id}', [\Modules\Hotel\Admin\HotelController::class, 'room_edit'])->name('room_edit');













    Route::get('/edit/{id}', [\Modules\Hotel\Admin\HotelController::class, 'edit'])->name('edit');
    Route::delete('/delete/{id}', [\Modules\Hotel\Admin\HotelController::class, 'delete'])->name('delete');

    Route::post('/store/{id?}', [\Modules\Hotel\Admin\HotelController::class, 'store'])->name('store');
});
