<?php

namespace App\Utilities\Notifications;

class TelegramNotification implements NotificationsContract
{
    public function send(string $from, string $to, string $message): bool
    {
        return true;
    }
}