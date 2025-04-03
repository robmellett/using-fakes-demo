<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Services\HttpAnalyticsGateway;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class AnalyticsControllerTest extends TestCase
{
    #[Test]
    public function can_track_requests_using_concrete_implementation(): void
    {
        $result = $this->post('api/v1/analytics', [
            'email' => 'test@email.com',
        ])->assertOk();

        $this->assertEquals([
            'data' => [
                'email' => 'test@email.com',
                'id' => 101,
            ],
        ], $result->json());
    }

    #[Test]
    public function can_track_requests_using_fake_implementation(): void
    {
        HttpAnalyticsGateway::fake();

        $result = $this->post('api/v1/analytics', [
            'email' => 'test@email.com',
        ])->assertOk();

        $this->assertEquals([
            'data' => [
                'email' => 'test@email.com',
                'id' => 105,
            ],
        ], $result->json());
    }
}
