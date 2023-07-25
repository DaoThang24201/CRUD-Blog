<?php

namespace Modules;

use Illuminate\Support\ServiceProvider;

class ModuleProvider extends ServiceProvider {

    public function register()
    {
        $this->app->register(\Modules\Blog\ServiceProvider::class);

        $this->app->register(\Modules\Hotel\ServiceProvider::class);

        $this->app->register(\Modules\Core\ServiceProvider::class);
    }

}
