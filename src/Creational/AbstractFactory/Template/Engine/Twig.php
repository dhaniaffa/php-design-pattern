<?php

namespace Src\Creational\AbstractFactory\Template\Engine;

use Src\Creational\AbstractFactory\Template\Engine\Page\TwigPageTemplate;
use Src\Creational\AbstractFactory\Template\Engine\Render\TwigRender;
use Src\Creational\AbstractFactory\Template\Engine\Title\TwigTitle;
use Src\Creational\AbstractFactory\Template\Interface\PageTemplate;
use Src\Creational\AbstractFactory\Template\Interface\RenderTemplate;
use Src\Creational\AbstractFactory\Template\Interface\TemplateFactory;
use Src\Creational\AbstractFactory\Template\Interface\TitleTemplate;

class Twig implements TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate
    {
        return new TwigTitle();
    }

    public function createPageTemplate(): PageTemplate
    {
        return new TwigPageTemplate($this->createTitleTemplate());
    }

    public function getRenderer(): RenderTemplate
    {
        return new TwigRender();
    }
}
