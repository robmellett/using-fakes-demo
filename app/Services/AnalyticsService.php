<?php

namespace App\Services;

interface AnalyticsService
{
    public static function make(): self;

    public static function fake(): AnalyticsService;

    public function track(array $data): array;
}
