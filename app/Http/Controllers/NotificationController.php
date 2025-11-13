<?php

namespace App\Http\Controllers;

use App\Services\NotificationService;

class NotificationController extends Controller
{
    public function notify(NotificationService $service)
    {
        return $service->sendNotification();
    }
}
