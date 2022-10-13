<?php

namespace database;
class Connection
{
    public static function make($config)
    {
        try {
            //return new PDO('mysql:host=localhost;dbname=mytodo', 'root', '');

            return new PDO('mysql:host=' . $config['host'] . ';dbname=' . $config['name'],
                $config['username'],
                $config['password'],
                $config['option']);

        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
