<?php

namespace Modules\Hotel;

use Illuminate\Support\Facades\View;

class ServiceProvider extends \Illuminate\Support\ServiceProvider {

    public function boot()
    {
        View::addNamespace('Hotel',__DIR__.'/Views');

        $this->loadMigrationsFrom(__DIR__.'/Database/migrations');
    }

    public function register()
    {
        $this->app->register(RouteProvider::class);
    }

}
