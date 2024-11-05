<?php

namespace Src\Structural\Adapter\Notification;

class MastodonNotification implements NotificationAdapter
{
    public function __construct(private Mastodon $mastodon, private string $chatId) {}

    public function login(): string
    {
        return $this->mastodon->logIn();
    }

    public function send(string $title, string $message): string
    {
        return $this->mastodon->sendMessage($this->chatId, $message);
    }
}
