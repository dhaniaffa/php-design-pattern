<?php

namespace Src\Creational\Factory\Social;

use Src\Creational\Factory\Social\Interface\ConnectorInterface;
use Src\Creational\Factory\Social\Poster\SocialNetworkPoster;

class SocialNetwork
{
    public function getInstance(SocialNetworkPoster $poster): ConnectorInterface
    {
        return $poster->getSocialNetwork();
    }
}
