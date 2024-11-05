<?php

namespace Src\Structural\Adapter\Book;

class EbookAdapter implements BookInterface
{
    public function __construct(private EbookInterface $ebook) {}

    public function open(): string
    {
        return $this->ebook->openEbook();
    }

    public function nextPage(): string
    {
        return $this->ebook->slideNext();
    }
}
