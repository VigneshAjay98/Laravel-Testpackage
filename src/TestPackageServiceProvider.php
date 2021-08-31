<?php

namespace VigneshAjay\TestPackage;

use Illuminate\Support\ServiceProvider;

class TestPackageServiceProvider extends ServiceProvider 
{

public function boot() {
    $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    $this->loadViewsFrom(__DIR__.'/views', 'test-package');
    
    $this->publishes([
        __DIR__.'/views' => resource_path('views/vendor/TestPackage'),
    ]);

}

public function register() {

}

}