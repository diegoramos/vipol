<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?= $title ?></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h2><?= $title ?></h2>

	<?php if (! empty($news) && is_array($news)) : ?>

	        <?php foreach ($news as $news_item): ?>

	                <h3><?= $news_item['blog_title'] ?></h3>

	                <div class="main">
	                        <?= $news_item['blog_description'] ?>
	                </div>
	                <p><a href="<?= '/news/'.$news_item['blog_id'] ?>">View article</a></p>

	        <?php endforeach; ?>

	<?php else : ?>

	        <h3>No News</h3>

	        <p>Unable to find any news for you.</p>

	<?php endif ?>
</body>
</html>