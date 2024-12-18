<?php

namespace App\Providers;

use App\Services\APIService;
use App\Services\Contracts\IAPIService;
use GuzzleHttp\Client;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class ServiceServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(
            IAPIService::class,
            static fn(Application $_) => APIService::instance(new Client())
        );
    }
}
