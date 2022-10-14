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

    function selectAll($table)
    {
        $statement = $this->pdo->prepare("SELECT * from {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);


    }

    function insert($table, $parameters)
    {
        ;
        $sql = sprintf(
            'INSERT INTO %s (%s) values( %s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))

        );
        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);
        } catch (\PDOException $e) {

            die($e->getMessage());

        }
    }
}
