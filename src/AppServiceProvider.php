<?php

namespace Datomon\LaravelMailserveTest;

use Illuminate\Support\ServiceProvider;
use Datomon\LaravelMailserveTest\Commands\SendEmail;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        //views
        $this->loadViewsFrom(__DIR__.'/views', 'mailserve-test');

        //commands
        if ($this->app->runningInConsole()) {
            $this->commands([
                SendEmail::class,
            ]);
        }
    }

    public function boot()
    {
        //
    }
}
