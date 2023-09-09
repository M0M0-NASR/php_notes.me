<?php

namespace Controller;

use Core\Database;
use Core\View;
use Exception;

class HomeController
{
    function index()
    {
        $email = "joe@moo.com";
        $full_name = "Joe MOMO";

        $db = Database::connect();

        // $db->beginTransaction();

        // FRIST QUERY
        $query = "INSERT INTO users (email, full_name , created_at , is_active)
        VALUES(:email , :full_name , NOW() , 1)";
        $stmt = $db->prepare($query);
        $stmt->bindValue("email", $email);
        $stmt->bindValue("full_name", $full_name);
        $stmt->execute();
        throw new Exception();
        $lastId = (int) $db->lastInsertId();
        // SECOND QUERY
        $query = "SELECT * FROM users WHERE id =?";
        $stmt = $db->prepare($query);
        $stmt->execute([$lastId]);
        $user = $stmt->fetch();
        var_dump($user);

            // $db->commit();
    }
}
