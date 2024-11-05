<?php

namespace Src\Structural\Adapter\Book;

class User implements BookInterface
{
    public function __construct(private BookInterface $book) {}

    public function open(): string
    {
        return $this->book->open();
    }

    public function nextPage(): string
    {
        return $this->book->nextPage();
    }
}
