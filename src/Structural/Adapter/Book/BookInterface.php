<?php

namespace Src\Structural\Adapter\Book;

interface BookInterface
{
    public function open(): string;

    public function nextPage(): string;
}
