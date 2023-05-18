<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Set default pagination
        Paginator::defaultView('vendor.pagination.bootstrap-4');

        // Add custom directives
        Blade::if('admin', function () {
            return auth()->check() && auth()->user()->is_admin;
        });
        Blade::if('user', function () {
            return auth()->check() && !auth()->user()->is_admin;
        });

    }
}
