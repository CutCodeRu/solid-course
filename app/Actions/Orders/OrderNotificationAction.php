<?php

namespace App\Actions\Orders;


use App\Models\Order;

class OrderNotificationAction
{
    public function handle(Order $order)
    {
        if($order->notification_type == 'email') {
            $this->notifyManagerByEmail($order);
        }

        if($order->notification_type == 'telegram') {
            $this->notifyManagerByTelegram($order);
        }

        if($order->notification_type == 'slack') {
            $this->notifyManagerBySlack($order);
        }

        if($order->notification_type == 'whatsapp') {
            $this->notifyManagerByWhatsApp($order);
        }
    }

    private function notifyManagerByEmail(Order $order) {
        // Реализация
    }

    private function notifyManagerByTelegram(Order $order) {
        // Реализация
    }

    private function notifyManagerBySlack(Order $order) {
        // Реализация
    }

    private function notifyManagerByWhatsApp(Order $order) {
        // Реализация
    }
}