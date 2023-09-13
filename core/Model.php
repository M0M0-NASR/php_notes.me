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
            throw new \PDOException("DataBase Error Connection field", 500);
        }
    }


    protected function connect()
    {
        // var_dump($this->db);
        if (isset($this->db)) {
            return $this->db;
        } else {
            echo "Error In DB Connection";
        }
    }
}
