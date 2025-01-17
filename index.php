<?php
require_once 'controllers/AuthorController.php';

$pdo = new PDO('mysql:host=localhost;dbname=your_database_name', 'username', 'password');
$authorManager = new AuthorManager($pdo);
$controller = new AuthorController($authorManager);

if (isset($_GET['author_id'])) {
    $controller->listBooksByAuthor((int)$_GET['author_id']);
} else {
    $controller->listAuthors();
}
