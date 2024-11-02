<?php

namespace Src\Creational\AbstractFactory\Template\Engine\Render;

use Src\Creational\AbstractFactory\Template\Interface\RenderTemplate;

class BladeRender implements RenderTemplate
{
    public function render(string $template, array $arguments = []): string
    {
        $template = $this->replaceSymbols($template);

        extract($arguments);

        ob_start();

        eval(' ?>' . $template . '<?php ');

        $result = ob_get_contents();

        ob_end_clean();

        return $result;
    }

    /**
     * Replace Blade symbols with PHP echo.
     *
     * @param string $template
     *
     * @return string
     */
    private function replaceSymbols(string $template): string
    {
        return str_replace(['{{', '}}'], ['<?php echo ', '; ?>'], $template);
    }
}
