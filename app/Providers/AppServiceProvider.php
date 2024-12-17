<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Spatie\Flash\Flash;

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
        Flash::levels([
            'success' => 'text-radiation',
            'warning' => 'text-yellow-800',
            'error' => 'text-hellfire',
        ]);
    }
}
