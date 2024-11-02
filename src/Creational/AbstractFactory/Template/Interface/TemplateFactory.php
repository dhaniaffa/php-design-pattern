<?php

namespace Src\Creational\AbstractFactory\Template\Interface;

interface TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate;

    public function createPageTemplate(): PageTemplate;

    public function getRenderer(): RenderTemplate;
}
