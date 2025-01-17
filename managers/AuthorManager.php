<?php
class AuthorManager
{
    private PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function getAllAuthors(): array
    {
        $query = $this->db->query('SELECT * FROM authors');
        $authors = [];

        while ($data = $query->fetch(PDO::FETCH_ASSOC)) {

            $authors[] = new Author(
                $data['id'],
                $data['first_name'],
                $data['last_name'],
                $data['biography']
            );
        }

        return $authors;
    }

    public function getBooksByAuthor(int $authorId): array
    {

        $query = $this->db->prepare('SELECT * FROM books WHERE author_id = :authorId');
        $query->execute(['authorId' => $authorId]);
        $books = [];

        while ($data = $query->fetch(PDO::FETCH_ASSOC)) {

            $books[] = new Book(
                $data['id'],
                $data['title'],
                $data['author_id'],
                $data['excerpt'],
                $data['price']
            );
        }

        return $books;
    }
}
