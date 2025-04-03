<?php

declare(strict_types=1);

namespace App\Services;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

class AnalyticsClient
{
    public static function create(): PendingRequest
    {
        return Http::withHeaders([
            'X-Example' => 'example',
        ])
            ->baseUrl('https://jsonplaceholder.typicode.com');
    }
}
