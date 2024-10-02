<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        
        if (env('APP_ENV')=='test') {
            \URL::forceScheme('https');
        }
        Paginator::useBootstrap();

    }
}
