<?php

namespace Src\Structural\Adapter\Book;

class Book implements BookInterface
{
    public function open(): string
    {
        return 'open book';
    }

    public function nextPage(): string
    {
        return 'next page';
    }

    public function closeBook(): string
    {
        return 'close book';
    }
}
