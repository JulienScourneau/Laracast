<?php

namespace database;
use PDO;

class queryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    function selectAll($table, $intoClass)
    {
        $statement = $this->pdo->prepare("SELECT * from {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);


    }
}
