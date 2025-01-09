<?php

namespace MyVendor\AuthPackage;

use Illuminate\Support\ServiceProvider;

class AuthPackageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/api.php');

        // Merge configuration
        $this->mergeConfigFrom(__DIR__ . '/../config/authpackage.php', 'authpackage');
    }

    public function register()
    {
        // Register any bindings if needed
    }
}
