<?php require ('partials/head.php'); ?>

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
<?php require('partials/footer.php');