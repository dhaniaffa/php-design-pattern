<?php

namespace Src\Creational\AbstractFactory\Template\Engine\Render;

use Src\Creational\AbstractFactory\Template\Interface\RenderTemplate;

class TwigRender implements RenderTemplate
{
    public function render(string $template, array $arguments = []): string
    {
        extract($arguments);

        $template = $this->replaceSymbols($template);

        ob_start();

        eval(' ?>' . $template . '<?php ');

        $result = ob_get_contents();

        ob_end_clean();

        return $result;
    }

    public function replaceSymbols(string $template): string
    {
        return str_replace(['{%', '%}'], ['<?php echo', '?>'], $template);
    }
}
