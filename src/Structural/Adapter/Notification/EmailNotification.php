<?php

namespace Src\Structural\Adapter\Notification;

class EmailNotification implements NotificationAdapter
{
    public function __construct(private string $senderEmail) {}

    public function send(string $title, string $message): string
    {
        return "email from $this->senderEmail has been sent";
    }
}
