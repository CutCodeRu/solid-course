<?php

namespace App\Utilities\Notifications;

class EmailNotification implements NotificationsContract
{
    public function send(string $from, string $to, string $message): bool
    {
        return true;
    }
}