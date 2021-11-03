<?php

namespace App\Actions\Orders;


use App\Models\Order;

class OrderNotificationAction
{
    public function handle(Order $order)
    {
        try {
            $className = 'App\Utilities\Notifications\\' . ucfirst($order->notification_type) . 'Notification';

            return (new $className)->send();
        } catch (\Exception $e) {
            abort(404, "Формат {$order->notification_type} не поддерживается");
        }
    }
}