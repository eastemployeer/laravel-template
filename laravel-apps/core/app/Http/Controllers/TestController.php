<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class TestController extends Controller
{
    public function test(): JsonResponse
    {
        return response()->json([
            'data' => [
                'test1',
                'test2',
                rand(1, 100),
            ],
        ]);
    }
}
