<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<nav>
    <ul>
        <li><a href="/about">About page</a></li>
        <li><a href="/contact">Contact page</a></li>
    </ul>
</nav>

<ul>
    <?php foreach ($tasks

                   as $task) : ?>
        <li>
            <?php if ($task->isComplete()) : ?>
                <strike><?= $task->getDescription() ?></strike>
            <?php else : ?>
                <?= $task->getDescription() ?>
            <?php endif; ?>
        </li>
    <?php endforeach; ?>
</ul>


</body>
</html>