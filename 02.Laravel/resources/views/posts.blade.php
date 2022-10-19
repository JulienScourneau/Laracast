<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/app.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
</head>
<body>
<h1>Hello World</h1>

<?php foreach ($posts as $post): ?>
<article>
    <a href="/posts/<?= $post->slug; ?>">
    <h1><?= $post->title ?></h1>
    </a>


    <div>
            <?= $post->excerpt ?>
    </div>
</article>
<?php endforeach; ?>


</body>
</html>
