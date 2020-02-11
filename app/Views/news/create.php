<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?= esc($title); ?></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h2><?= esc($title); ?></h2>

	<?= \Config\Services::validation()->listErrors(); ?>

	<form action="/news/create">

	    <label for="title">Title</label>
	    <input type="input" name="title" /><br />

	    <label for="body">Text</label>
	    <textarea name="body"></textarea><br />

	    <input type="submit" name="submit" value="Create news item" />

	</form>
</body>
</html>