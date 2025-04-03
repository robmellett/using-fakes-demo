<?php

declare(strict_types=1);

namespace App\Services;

class InMemoryGateway implements AnalyticsService
{
    public static function make(): self
    {
        return app(static::class);
    }

    public static function fake(): AnalyticsService
    {
        return new self;
    }
}
