<?php

namespace Src\Structural\Adapter\Notification;

class Mastodon
{
    public function __construct(private string $username, private string $apiKey) {}

    public function logIn(): string
    {
        return "login with username : $this->username";
    }

    public function sendMessage(string $chatId, string $message): string
    {
        return "send message to chat $chatId : $message success";
    }
}
