<?php

namespace Src\Creational\AbstractFactory\Template\Engine\Page;

class BladePageTemplate extends BasePageTemplate
{
    public function getPageTemplate(): string
    {
        $titleTemplate = $this->titleTemplate->getTitle();

        return <<<HTML
        <div class="header">
            <div class="blade-title">{$titleTemplate}</div>
        </div>
        <div class="body">
            <p class="blade-body">{{ \$content }}</p>
        </div>
        HTML;
    }
}
