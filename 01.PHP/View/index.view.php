<?php require('partials/head.php'); ?>

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

<h1>Submit Name</h1>
    <form action="/names" method="post">
        <label>
            <input type="text" name="name">
        </label>
        <button type="submit">Submit</button>
    </form>

<?php require('partials/footer.php');