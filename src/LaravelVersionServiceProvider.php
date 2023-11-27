<?php

namespace Daerentis\LaravelVersion;

use Illuminate\Support\ServiceProvider;
use Daerentis\LaravelVersion\Commands\LaravelVersionCommand;

class LaravelVersionServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                LaravelVersionCommand::class,
            ]);

            $this->publishes([
                __DIR__ . '/../config/laravel-version.php' => config_path('laravel-version.php'),
            ], 'laravel-version-config');
        }
    }
}
