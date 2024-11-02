<?php

namespace Src\Creational\AbstractFactory\Template\Interface;

interface RenderTemplate
{
    public function render(string $template, array $arguments = []): string;
}
