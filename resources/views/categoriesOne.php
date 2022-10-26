<?php include_once 'menu.php'; ?>
<h2><?= $categories['title'] ?></h2>
<?php foreach ($news as $item) : ?>
    <a href="<?= route('news.newsOneWithSlug', [$item['id'], $item['slug']]) ?>"><?= $item['title'] ?></a><br>
<?php endforeach; ?>