<?php

namespace Src\Structural\Adapter\Book;

interface EbookInterface
{
    public function openEbook(): string;

    public function slideNext(): string;
}
