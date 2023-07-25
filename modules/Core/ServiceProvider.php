<?php

namespace Modules\Core;

use Illuminate\Support\Facades\View;

class ServiceProvider extends \Illuminate\Support\ServiceProvider {

    public function boot()
    {
        View::addNamespace('Core',__DIR__.'/Views');
    }

    public function register()
    {
        $this->app->register(RouteProvider::class);
    }

}
