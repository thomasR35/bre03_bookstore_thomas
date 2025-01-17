<?php
class Book
{
    private int $id;
    private string $title;
    private string $excerpt;
    private float $price;
    private int $authorId;

    public function __construct(int $id, string $title, string $excerpt, float $price, int $authorId)
    {
        $this->id = $id;
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->price = $price;
        $this->authorId = $authorId;
    }

    // Getters
    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getExcerpt(): string
    {
        return $this->excerpt;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getAuthorId(): int
    {
        return $this->authorId;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function setExcerpt(string $excerpt): void
    {
        $this->excerpt = $excerpt;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function setAuthorId(int $authorId): void
    {
        $this->authorId = $authorId;
    }
}
