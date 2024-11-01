<?php

namespace Src\Creational\Factory\Social\Poster;

use Src\Creational\Factory\Social\Interface\ConnectorInterface;

abstract class SocialNetworkPoster
{
    abstract public function getSocialNetwork(): ConnectorInterface;

    public function post($content): void
    {
        $network = $this->getSocialNetwork();

        $network->logIn();

        $network->createPost($content);

        $network->logOut();
    }
}
