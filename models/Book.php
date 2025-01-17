<?php
class Book
{
    private int $id;
    private string $title;
    private int $authorId;

    public function __construct(int $id, string $title, int $authorId)
    {
        $this->id = $id;
        $this->title = $title;
        $this->authorId = $authorId;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAuthorId(): int
    {
        return $this->authorId;
    }
}
