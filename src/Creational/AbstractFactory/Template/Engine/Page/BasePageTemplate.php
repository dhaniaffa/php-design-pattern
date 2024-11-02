<?php

namespace Src\Creational\AbstractFactory\Template\Engine\Page;

use Src\Creational\AbstractFactory\Template\Interface\PageTemplate;
use Src\Creational\AbstractFactory\Template\Interface\TitleTemplate;

class BasePageTemplate implements PageTemplate
{
    public function __construct(protected TitleTemplate $titleTemplate) {}

    public function getPageTemplate(): string
    {
        return "Base Template";
    }
}
