<?php
class Author
{
    private string $first_name;
    private string $last_name;
    private string $biography;

    public function __construct(string $first_name, string $last_name, string $biography)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->biography = $biography;
    }

    public function getFirstName(): string
    {
        return $this->first_name . " " . $this->last_name;
    }
    public function setFirstName(string $first_name): void
    {
        $this->first_name = $first_name;
    }
    public function getLastName(): string
    {
        return $this->last_name;
    }
    public function setLastName(string $last_name): void
    {
        $this->last_name = $last_name;
    }
    public function getBiography(): string
    {
        return $this->biography;
    }
    public function setBiography(string $biography): void
    {
        $this->biography = $biography;
    }
}
