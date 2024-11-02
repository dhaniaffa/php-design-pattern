<?php

namespace Src\Creational\AbstractFactory\Template\Engine\Page;


class TwigPageTemplate extends BasePageTemplate
{
    public function getPageTemplate(): string
    {
        $titleTemplate = $this->titleTemplate->getTitle();

        // Example Twig Template
        return <<<HTML
        <div class="header">
            <div class="twig-title">$titleTemplate</div>
        </div>
        <div class="body">
            <p class="twig-body">{% \$content %}</p>
        </div>
        HTML;
    }
}
