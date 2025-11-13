<?php

namespace App\Http\Controllers;

use App\Services\GreetingService;

class DashboardController extends Controller
{
    public function index(GreetingService $greetingService)
    {
        $greeting = $greetingService->getGreeting();
        return "Saudação atual: {$greeting}";
    }
}
