<?php

namespace App\Http\Controllers;

use App\Services\AnalyticsService;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Response;

class AnalyticsController extends Controller
{
    public function __construct(
        public AnalyticsService $service
    ) {}

    public function __invoke(Request $request): JsonResource
    {
        $result = $this->service->track($request->all());

        return JsonResource::make([
            'data' => $result,
        ]);
    }
}
