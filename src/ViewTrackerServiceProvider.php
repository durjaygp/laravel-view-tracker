<?php

namespace Durjaygp\ViewTracker;

use Illuminate\Support\ServiceProvider;

class ViewTrackerServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('viewtracker', function () {
            return new ViewTracker();
        });
    }

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    }
}
