<?php include_once 'menu.php'; ?>
<h2>Категории</h2>
<?php foreach ($categories as $item) : ?>
    <a href="<?= route('categoryOneWithSlug', [$item['id'], $item['slug']]) ?>"><?= $item['title'] ?></a><br>
<?php endforeach; ?>