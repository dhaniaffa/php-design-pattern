<?php

namespace Src\Creational\Prototype\Blog;

class Page
{
    private string $title;

    private string $body;

    private Author $author;

    private array $comments = [];

    private \DateTime $date;

    public function __construct(string $title, string $body, Author $author)
    {
        $this->title = $title;
        $this->body = $body;
        $this->author = $author;
        $this->author->addToPage($this);
        $this->date = new \DateTime();
    }

    public function addComment(string $comment): void
    {
        $this->comments[] = $comment;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAuthor(): Author
    {
        return $this->author;
    }

    public function __clone()
    {
        $this->title = "Clone of " . $this->title;
        $this->author->addToPage($this);
        $this->comments = [];
        $this->date = new \DateTime();
    }
}
