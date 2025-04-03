<?php

declare(strict_types=1);

namespace App\Services;

use Illuminate\Http\Client\PendingRequest;

class HttpAnalyticsGateway implements AnalyticsService
{
    public function __construct(
        protected readonly PendingRequest $client,
    ) {}

    public static function make(): self
    {
        return app(static::class);
    }

    public static function fake(): AnalyticsService
    {
        $inMemoryService = InMemoryGateway::make();

        app()->instance(AnalyticsService::class, $inMemoryService);

        return $inMemoryService;
    }

    public function track(array $data): array
    {
        return $this->client->post('/posts', $data)->json();
    }
}
