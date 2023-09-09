<?php

namespace Core;

use PDO;

class Model
{

    static function connect()
    {
        $dsn = "mysql:host=" . $_ENV['DB_HOST'] . ";dbname=" . $_ENV['DB_NAME'];
        try {
            $db = new PDO(
                $dsn,
                $_ENV['USERNAME'],
                $_ENV['PASS'],
                [
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                ]
            );
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
        return $db;
    }
}
