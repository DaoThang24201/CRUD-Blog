<?php

namespace Modules\Blog;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteProvider extends RouteServiceProvider {

    public function boot()
    {


        $this->routes(function () {
            Route::middleware('web')->group(__DIR__.'/Routes/web.php');
            Route::middleware('web')->prefix('admin/blog')->group(__DIR__.'/Routes/admin.php');
        });
    }

}
