<?php

namespace Src\Creational\Factory\Social\Connector;

use Src\Creational\Factory\Social\Interface\ConnectorInterface;

class FacebookConnector implements ConnectorInterface
{
    public function __construct(private string $username, private string $password) {}

    public function logIn(): string
    {
        return "login with username : $this->username";
    }

    public function logOut(): string
    {
        return "goodbye $this->username";
    }

    public function createPost($content): string
    {
        return "Create post : $content";
    }
}
