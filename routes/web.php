<?php

use Illuminate\Support\Facades\Route;

Route::resource('orders', \App\Http\Controllers\OrderController::class);
Route::get('/orders/report/{order}/{format}', [\App\Http\Controllers\OrderNotificationController::class, 'index']);