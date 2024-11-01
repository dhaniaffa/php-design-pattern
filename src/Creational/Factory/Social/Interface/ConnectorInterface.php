<?php

namespace Src\Creational\Factory\Social\Interface;

interface ConnectorInterface
{
    public function logIn(): string;

    public function logOut(): string;

    public function createPost($content): string;
}
