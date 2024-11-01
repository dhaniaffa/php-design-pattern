<?php

namespace Src\Creational\Factory\Social\Poster;

use Src\Creational\Factory\Social\Connector\LinkedInConnector;
use Src\Creational\Factory\Social\Interface\ConnectorInterface;
use Src\Creational\Factory\Social\Poster\SocialNetworkPoster;

class LinkedInPoster extends SocialNetworkPoster
{
    public function __construct(private string $username, private string $password) {}

    public function getSocialNetwork(): ConnectorInterface
    {
        return new LinkedInConnector($this->username, $this->password);
    }
}
