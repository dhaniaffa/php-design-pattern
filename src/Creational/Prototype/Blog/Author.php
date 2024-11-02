<?php

namespace Src\Creational\Prototype\Blog;

use Src\Creational\Prototype\Blog\Page;

class Author
{
    private string $name;

    private array $pages = [];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function addToPage(Page $page): void
    {
        $this->pages[] = $page;
    }
}
