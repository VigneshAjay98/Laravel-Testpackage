<?php

namespace VigneshAjay\TestPackage;

use Illuminate\Support\ServiceProvider;

class TestPackageServiceProvider extends ServiceProvider 
{

public function boot() {
    $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    $this->loadViewsFrom(__DIR__.'/views', 'test-package');
    $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    
    $this->publishes([
        __DIR__.'/views' => resource_path('views/vendor/TestPackage'),
        __DIR__.'/database/migrations' => database_path('migrations'),
        __DIR__.'/database/seeders' => database_path('seeders'),
    ]);

}

public function register() {

}

}