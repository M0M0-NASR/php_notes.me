<?php

namespace Core;

use PDO;

class Model
{
    private PDO $db;

    function __construct()
    {
        $dsn = "mysql:host=" . $_ENV['DB_HOST'] . ";dbname=" . $_ENV['DB_NAME'];
        try {
            $this->db = new PDO(
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
    }


    protected function connect()
    {
        // var_dump($this->db);
        if (isset($this->db)) {
            echo "Connection Established<br>";
            return $this->db;
        } else {
            echo "Error In DB Connection";
        }
    }
}
