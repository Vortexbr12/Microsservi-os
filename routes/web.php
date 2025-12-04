<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\NotificationController;

Route::get('/notify', [NotificationController::class, 'notify']);

use App\Http\Controllers\DashboardController;

Route::get('/dashboard', [DashboardController::class, 'index']);

