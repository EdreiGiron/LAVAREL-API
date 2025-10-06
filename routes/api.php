<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

Route::get('ping', fn () => ['status' => 'ok', 'time' => now()->toDateTimeString()]);

Route::apiResource('clients', ClientController::class);
