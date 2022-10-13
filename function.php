<?php
function fetchAllTasks($pdo){
    $statement = $pdo->prepare('SELECT * from task');
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

}
