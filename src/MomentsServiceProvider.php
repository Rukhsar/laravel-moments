<?php

namespace Rukhsar\Moments;

use Illuminate\Support\ServiceProvider;
use Rukhsar\Moments\MomentsFacade\Moments;

class MomentsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('moments', function() {
           return new Moments();
        });
    }
}
