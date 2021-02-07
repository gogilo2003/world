<?php
namespace Gogilo\World;

use Illuminate\Support\ServiceProvider;

class WorldServiceProvider extends ServiceProvider{
    function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadfactoriesFrom(__DIR__.'/../database/factories');
    }
}