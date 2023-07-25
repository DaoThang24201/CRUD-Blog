<?php

namespace Modules\Hotel;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteProvider extends RouteServiceProvider {

    public function boot()
    {
        $this->routes(function () {
            Route::middleware('web')->prefix('hotel')->group(__DIR__.'/Routes/web.php');
        });

        $this->routes(function () {
            Route::middleware('web')->prefix('admin/hotel')->group(__DIR__.'/Routes/admin.php');
        });
    }

}
