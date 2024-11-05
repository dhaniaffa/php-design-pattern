<?php

namespace Src\Structural\Adapter\Notification;

interface NotificationAdapter
{
    public function send(string $title, string $message): string;
}
