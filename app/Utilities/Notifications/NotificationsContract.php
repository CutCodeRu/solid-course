<?php

namespace App\Utilities\Notifications;

interface NotificationsContract
{
    public function send(string $from, string $to, string $message) : bool;
}