<h2>Привет, <?= $name; ?>!</h2>
<ul>
    <?php foreach ($comments as $comment): ?>
        <li><?= $comment ?></li>
    <?php endforeach; ?>
</ul>
