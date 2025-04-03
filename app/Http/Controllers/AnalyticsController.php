<?php

namespace App\Http\Controllers;

use App\Services\AnalyticsService;
use Illuminate\Http\Request;

class AnalyticsController extends Controller
{
    public function __construct(
        public AnalyticsService $service
    ) {}

    public function __invoke(Request $request)
    {
        $result = $this->service->track($request->all());

        return response()->json([
            'data' => $result,
        ]);
    }
}
