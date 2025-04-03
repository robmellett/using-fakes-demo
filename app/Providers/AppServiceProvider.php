<?php

namespace App\Providers;

use App\Services\AnalyticsClient;
use App\Services\AnalyticsService;
use App\Services\HttpAnalyticsGateway;
use Illuminate\Foundation\Application;
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
        $this->app->singleton(AnalyticsService::class, function (Application $app) {
            return new HttpAnalyticsGateway(
                AnalyticsClient::create()
            );
        });
    }
}
