<?php require('partials/head.php'); ?>
<h1>Users</h1>

        <ul>
            <?php foreach ($names as $user) : ?>
                <li>
                    <?= $user->name ?>
                </li>


            <?php endforeach; ?>
        </ul>

        <h1>Submit Name</h1>
        <form action="/users" method="post">
            <label>
                <input type="text" name="name">
            </label>
            <button type="submit">Submit</button>
        </form>

<?php require('partials/footer.php');