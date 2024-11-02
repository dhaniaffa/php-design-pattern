<?php

namespace Src\Creational\AbstractFactory\Template;

use Src\Creational\AbstractFactory\Template\Interface\TemplateFactory;

class Page
{
    public function __construct(public string $title, public string $content) {}

    public function render(TemplateFactory $template): string
    {
        $pageTemplate = $template->createPageTemplate();

        $renderer = $template->getRenderer();

        return $renderer->render($pageTemplate->getPageTemplate(), [
            'title' => $this->title,
            'content' => $this->content
        ]);
    }
}
