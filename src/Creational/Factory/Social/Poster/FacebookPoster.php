<?php

namespace Src\Creational\Factory\Social\Poster;

use Src\Creational\Factory\Social\Connector\FacebookConnector;
use Src\Creational\Factory\Social\Interface\ConnectorInterface;

class FacebookPoster extends SocialNetworkPoster
{
    public function __construct(private string $username, private string $password) {}

    public function getSocialNetwork(): ConnectorInterface
    {
        return new FacebookConnector($this->username, $this->password);
    }
}
