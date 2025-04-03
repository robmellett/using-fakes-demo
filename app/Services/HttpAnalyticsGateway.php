<?php

declare(strict_types=1);

namespace App\Services;

class HttpAnalyticsGateway implements AnalyticsService
{
    public static function make(): self
    {
        return app(static::class);
    }

    public static function fake(): AnalyticsService
    {
        $inMemoryService = new InMemoryGateway;

        app()->instance(AnalyticsService::class, $inMemoryService);

        return $inMemoryService;
    }
}
