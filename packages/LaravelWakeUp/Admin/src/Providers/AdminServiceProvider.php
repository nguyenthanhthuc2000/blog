<?php

namespace LaravelWakeUp\Admin\Providers;

use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../../config/wakeup-admin.php',
            'wakeup-admin'
        );
    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../Routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../Resources/views', 'admin');
        $this->publishes([
            __DIR__ . '/../../config/wakeup-admin.php' => config_path('wakeup-admin.php'),
        ], 'wakeup-admin-config');
        
    }
}
