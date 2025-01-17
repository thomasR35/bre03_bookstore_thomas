<?php foreach ($authors as $author): ?>
    <h2><a href="index.php?author_id=<?= $author->getId() ?>"><?= htmlspecialchars($author->getName()) ?></a></h2>
<?php endforeach; ?>