<?php

use Illuminate\Support\Facades\Route;

Route::name('hotel.')->group(function () {

    Route::get('/',[\Modules\Hotel\Controllers\HotelController::class,'index'])->name('index');

    Route::get('/hotel-{slug}',[\Modules\Hotel\Controllers\HotelController::class,'detail'])->name('detail');



});
