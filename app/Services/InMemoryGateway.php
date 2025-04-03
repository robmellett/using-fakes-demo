<?php

declare(strict_types=1);

namespace App\Services;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

class InMemoryGateway implements AnalyticsService
{

    public static function make(): self
    {
        return app(static::class);
    }

    public static function fake(): AnalyticsService
    {
        return static::make();
    }

    public function track(array $data): array
    {
        return [...$data, 'id' => 105];
    }
}
