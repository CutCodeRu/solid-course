<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Utilities\Notifications\NotificationsContract;
use App\Utilities\Notifications\TelegramNotification;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OrderNotificationController extends Controller
{
    public function index(NotificationsContract $notification) : bool
    {
        return $notification->send('1000', '2000', 'Hello world');
    }
}
