<?php

namespace Src\Creational\AbstractFactory\Template\Engine;

use Src\Creational\AbstractFactory\Template\Engine\Page\BladePageTemplate;
use Src\Creational\AbstractFactory\Template\Engine\Render\BladeRender;
use Src\Creational\AbstractFactory\Template\Engine\Title\BladeTitle;
use Src\Creational\AbstractFactory\Template\Interface\PageTemplate;
use Src\Creational\AbstractFactory\Template\Interface\RenderTemplate;
use Src\Creational\AbstractFactory\Template\Interface\TemplateFactory;
use Src\Creational\AbstractFactory\Template\Interface\TitleTemplate;

class Blade implements TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate
    {
        return new BladeTitle();
    }

    public function createPageTemplate(): PageTemplate
    {
        return new BladePageTemplate($this->createTitleTemplate());
    }

    public function getRenderer(): RenderTemplate
    {
        return new BladeRender();
    }
}
