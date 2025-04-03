<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Services\AnalyticsService;
use App\Services\HttpAnalyticsGateway;
use App\Services\InMemoryGateway;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class AnalyticsServiceTest extends TestCase
{
    #[Test]
    public function can_create_the_service(): void
    {
        $this->assertInstanceOf(AnalyticsService::class, HttpAnalyticsGateway::make());

        $this->assertInstanceOf(HttpAnalyticsGateway::class, HttpAnalyticsGateway::make());

        $this->assertInstanceOf(InMemoryGateway::class, HttpAnalyticsGateway::fake());
    }
}
