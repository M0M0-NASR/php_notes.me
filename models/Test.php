<?php

namespace Model;

use Core\Model;

class Test extends Model
{
    private $connect;
    function __construct()
    {
        $this->connect = new Model;
        $this->connect = $this->connect->connect();
    }

    function getAll()
    {
        $query  = "SELECT * FROM users";
        $stmt = $this->connect->prepare($query);
        $stmt->execute();
        var_dump($stmt->fetchAll());
    }
}
