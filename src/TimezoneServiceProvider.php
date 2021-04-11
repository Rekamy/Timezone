<?php

namespace Rekamy\Timezone;

use Illuminate\Support\ServiceProvider;

class TimezoneServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        // 
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->singleton(Timezone::class, function () {
            return new Timezone();
        });
    }
}
