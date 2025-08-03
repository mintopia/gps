<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->name('api.v1.')->group(function () {
    Route::get('ping', [PingController::class, 'index'])->name('ping');
    Route::middleware('auth:sanctum')->group(function () {
    });
});

