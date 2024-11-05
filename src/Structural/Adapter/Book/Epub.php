<?php

namespace Src\Structural\Adapter\Book;

class Epub implements EbookInterface
{
    public function openEbook(): string
    {
        return 'open epub';
    }

    public function slideNext(): string
    {
        return 'epub next page';
    }
}
