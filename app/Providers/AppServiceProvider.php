<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Paginator::useBootstrapFive();

        Blade::if('admin', function () {
            return Auth::check() && Auth::user()->role->slug === 'admin' || Auth::user()->role->slug === 'astrologer' || Auth::user()->role->slug === 'developer';
        });
    }
}
