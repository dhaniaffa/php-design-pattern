<?php

namespace Src\Creational\AbstractFactory\Template\Engine\Title;

use Src\Creational\AbstractFactory\Template\Interface\TitleTemplate;

class BladeTitle implements TitleTemplate
{
    public function getTitle(): string
    {
        return "<h1>{{ \$title }}</h1>";
    }
}
