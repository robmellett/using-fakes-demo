<?php

declare(strict_types=1);

namespace App\Services;

use Illuminate\Support\Facades\Facade;

class Analytics extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return AnalyticsService::class;
    }
}
