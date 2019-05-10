<?php

namespace Luminee\Label;

use Illuminate\Support\ServiceProvider as _ServiceProvider;

class ServiceProvider extends _ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([realpath(__DIR__.'/../config/label.php') => config_path('label.php')]);
    }
    
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('command.label.migrate', function () {
            return new \Luminee\Label\Console\Commands\LabelMigrateCommand();
        });
    
        $this->commands('command.label.migrate');
        
        $this->mergeConfigFrom(realpath(__DIR__.'/../config/label.php'), 'label');
    }
}